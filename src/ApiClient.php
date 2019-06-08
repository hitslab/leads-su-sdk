<?php

namespace Hitslab\LeadsSuSDK;

use Hitslab\LeadsSuSDK\Exception\ApiErrorException;
use Hitslab\LeadsSuSDK\Exception\BadResponseException;

class ApiClient
{
    const DEFAULT_BASE_URL = "https://api.leads.su/webmaster/";

    private $apiToken;
    private $baseUrl;

    public function __construct(string $apiToken, string $baseUrl = null)
    {
        $this->apiToken = $apiToken;

        if ($baseUrl === null) {
            $baseUrl = self::DEFAULT_BASE_URL;
        }
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param string $object
     * @param string|null $method
     * @param array $data
     * @return string
     * @throws BadResponseException
     * @throws ApiErrorException
     */
    public function request($object, $method = null, $data = [])
    {
        $url = $this->baseUrl . "{$object}/";
        if ($method !== null) {
            $url .= "{$method}/";
        }

        $data['token'] = $this->apiToken;

        $url .= "?" . http_build_query($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $responseBody = curl_exec($ch);
        $responseInfo = curl_getinfo($ch);

        if (!$responseBody) {
            throw new BadResponseException("Пустое тело ответа", $responseInfo["http_code"]);
        }

        $this->checkBody($responseBody, $responseInfo);

        return $responseBody;
    }

    /**
     * @param $responseBody
     * @param $responseInfo
     * @throws ApiErrorException
     * @throws BadResponseException
     */
    private function checkBody($responseBody, $responseInfo)
    {
        $responseData = json_decode($responseBody, true);

        if (json_last_error() !== JSON_ERROR_NONE || empty($responseData['status'])) {

            if (!empty($responseData['error_msg'])) {
                throw new ApiErrorException(
                    $responseData['error_msg'],
                    null,
                    [],
                    !empty($responseData['error_code']) ? (int)$responseData['error_code'] : 0
                );
            }

            throw new BadResponseException("Неизвестный формат тела ответа", $responseInfo["http_code"]);
        }

        if ($responseData['status'] === "error") {
            throw new ApiErrorException(
                !empty($responseData['error']['message']) ? $responseData['error']['message'] : '',
                !empty($responseData['error']['type']) ? $responseData['error']['type'] : null,
                !empty($responseData['error']['params']) ? $responseData['error']['params'] : [],
                !empty($responseData['code']) ? (int)$responseData['code'] : 0
            );
        }
    }
}