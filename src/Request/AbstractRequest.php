<?php

namespace Hitslab\LeadsSuSDK\Request;

use Doctrine\Common\Annotations\AnnotationReader;
use Hitslab\LeadsSuSDK\ApiClient;
use Hitslab\LeadsSuSDK\Response\AbstractCollectionResponse;
use Hitslab\LeadsSuSDK\Response\AbstractResponse;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract class AbstractRequest
{
    private $apiClient;

    public $requestData = [];

    protected $object;

    protected $method;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getResponseClass()
    {
        return AbstractResponse::class;
    }

    /**
     * @return AbstractResponse
     * @throws \Hitslab\LeadsSuSDK\Exception\SdkException
     * @throws \Hitslab\LeadsSuSDK\Exception\ApiErrorException
     * @throws \Hitslab\LeadsSuSDK\Exception\BadResponseException
     */
    public function request()
    {
        $responseBody = $this->apiClient->request($this->object, $this->method, $this->requestData);

        try {
            return $this->deserialize($responseBody, $this->getResponseClass());
        } catch (\Exception $e) {
            throw new \Hitslab\LeadsSuSDK\Exception\SdkException("Ошибка сериализации", $e);
        }
    }

    /**
     * @param string $json
     * @param string $class
     * @return AbstractResponse
     * @throws \Doctrine\Common\Annotations\AnnotationException
     */
    public function deserialize($json, $class)
    {
        $classMetaDataFactory = new ClassMetadataFactory(
            new AnnotationLoader(
                new AnnotationReader()
            )
        );
        $objectNormalizer = new ObjectNormalizer($classMetaDataFactory, new CamelCaseToSnakeCaseNameConverter(), null, new PhpDocExtractor());
        $serializer = new Serializer([
            new ArrayDenormalizer(),
            $objectNormalizer,
        ], [
            new JsonEncoder(),
        ]);

        return $serializer->deserialize($json, $class, 'json', [
            'disable_type_enforcement' => true
        ]);
    }
}