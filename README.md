# PHP SDK для работы с API leads.su

С помощью API внешние приложения могут формировать отчеты, получать сведения о конверсиях, офферах и прочих объектах системы. 
Доступ к API имеют только пользователи с правами "Доступ к API".
Получить API токен можно в разделе [Информация об аккаунте](https://webmaster.leads.su/account/default).

[Документация по API](https://webmaster.leads.su/tools/api)

# Примеры использования

## Инициализация API клиента
```php
use Hitslab\LeadsSuSDK\ApiClient;

// Инициализируем API клиент, передаем токен доступа
$apiClient = new ApiClient("CTfX6npQragyZeXN4Xc6p7dyi89vZGPN");
```

## Запрос списка присоединенных офферов

```php
use Hitslab\LeadsSuSDK\Entity\Offer;
use Hitslab\LeadsSuSDK\Exception\ApiErrorException;
use Hitslab\LeadsSuSDK\Exception\BadResponseException;
use Hitslab\LeadsSuSDK\Exception\SdkException;
use Hitslab\LeadsSuSDK\Request\ConnectedOffersRequest;
use Hitslab\LeadsSuSDK\Response\OffersResponse;

try {
    /** @var OffersResponse $connectedOffers */
    $connectedOffers = (new ConnectedOffersRequest($apiClient))
        ->request();

    foreach ($connectedOffers->data as $connectedOffer) {
        /** @var Offer $connectedOffer */
        echo $connectedOffer->name . "\n";
    }
} catch (ApiErrorException $e) {
    // Ответ от API с ошибкой
} catch (BadResponseException $e) {
    // Неправильный ответ от сервера
} catch (SdkException $e) {
    // Ошибка в работе SDK, например ошибка десереализации ответа
}
```

## Запрос списка присоединенных офферов с возвратом итератора

```php
use Hitslab\LeadsSuSDK\Entity\Offer;
use Hitslab\LeadsSuSDK\Exception\ApiErrorException;
use Hitslab\LeadsSuSDK\Exception\BadResponseException;
use Hitslab\LeadsSuSDK\Exception\SdkException;
use Hitslab\LeadsSuSDK\Request\ConnectedOffersRequest;
use Hitslab\LeadsSuSDK\Response\IterableResponse;

try {
    /** @var IterableResponse $connectedOffers */
    $connectedOffers = (new ConnectedOffersRequest($apiClient))
        ->iterable()
        ->limit(20)
        ->request();

    foreach ($connectedOffers as $connectedOffer) {
        /** @var Offer $connectedOffer */
        echo $connectedOffer->name . "\n";
    }
} catch (ApiErrorException $e) {
    // Ответ от API с ошибкой
} catch (BadResponseException $e) {
    // Неправильный ответ от сервера
} catch (SdkException $e) {
    // Ошибка в работе SDK, например ошибка десереализации ответа
}
```