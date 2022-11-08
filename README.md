# tinkoff-invest-api-v2-php
Unofficial PHP SDK for Tinkoff Invest API v2

Документация Tinkoff Invest Api для разработчиков доступна по ссылке: https://tinkoff.github.io/investAPI/

Коммьюнити разработчиков в Telegram: https://t.me/joinchat/VaW05CDzcSdsPULM 

# Введение

Поскольку Tinkoff Invest API v2 в настоящее время позиционируется как gRPC-интерфейс для взаимодействия с торговой платформой 
Тинькофф Инвестиции, то первое, что нам понадобится - это документация по gRPC:

1) Quick start with PHP -> https://grpc.io/docs/languages/php/quickstart/ 
2) Basic tutorials -> https://grpc.io/docs/languages/php/basics/

# Структура текущего репозитория: 

```
etc - Директория, которая содержит сертификаты для подключения к сервису с использованием SSL
examples - Директория с примерами подключения к сервису и выполнением простейших запросов
library - Это фактически копия репозитория https://github.com/Tinkoff/investAPI/
library/src/docs/contracts - Директория, которая содержит proto файлы
src/models - Директория, которая содержит сгенерированные через protoc модели
```

# Требования для установки

Для начала работы нам потребуется: 
 * PHP 7.1 или новее (я делал и тестировал на php 7.4 / Ubuntu 18.04.5)
 * PECL, Composer

ВАЖНО: Данный репозиторий содержит уже сгенерированные из proto файлов модели. 
Содержимое директории *library/src/docs/contracts* не используется.

Если Вы хотите генерировать модели самостоятельное, то вам необходимо: 
1) Установить protoc
2) Собрать плагин grpc_php_plugin (см https://grpc.io/docs/languages/php/basics/#setup)
3) Вызвать что-нибудь типа:
```
sudo protoc --proto_path=~/contracts_dir/ --php_out=~/models_dic/ --grpc_out=~/models_dir/ --plugin=protoc-gen-grpc=./grpc_php_plugin ~/contracts_dir/*
```
подставив нужные вам директории.

Далее нам понадобится расширение grps.so для PHP (https://cloud.google.com/php/grpc).
```
sudo pecl install grpc
```
а после не забываем в php.ini добавить 
```
extension=grpc.so
```

А если вам необходимо логгировать исполнение, то можно также добавить в php.ini
```
grpc.grpc_verbosity=debug
grpc.grpc_trace=all,-polling,-polling_api,-pollable_refcount,-timer,-timer_check
grpc.log_filename=/var/log/grpc.log
```

Само собой не забыть 
```
sudo touch /var/log/grpc.log
sudo chmod 666 /var/log/grpc.log
```

# Устанавливаем через composer

PS: Если вы планируете использовать в проекте, разработанном на Yii2 Framework, то можно воспользоваться оберткой [metaseller/tinkoff-invest-api-v2-yii2](https://packagist.org/packages/metaseller/tinkoff-invest-api-v2-yii2).

Ну либо устанавливаем SDK через [composer](http://getcomposer.org/download/)

```
$ composer require Vorobevks/tinkoff-invest-api-v2 
```
ну или 
```
$ git clone git@github.com:Vorobevks/tinkoff-invest-api-v2.git .
composer update
```

прописываем свой Tinkoff Invest API v2 token
```
$ vim examples/example.php
```

```phpt
/**
 * Ваш токен доступа к API
 *
 * @see https://tinkoff.github.io/investAPI/token/
 */
$token = 't.ZEbUT................................................7dA';
```

и тестируем: 
```
$ php examples/example.php
```

# Тестовые примеры

Можно использовать фабрику создания клиентов доступа к сервисам Tinkoff Invest Api V2

```phpt
/**
 * Ваш токен доступа к API
 *
 * @see https://tinkoff.github.io/investAPI/token/
 */
$token = '<Your Tinkoff Invest Account Token>';
$tinkoff_api = TinkoffClientsFactory::create($token);

/**
 * Создаем экземпляр запроса информации об аккаунте к сервису
 *
 * Запрос не принимает никаких параметров на вход
 *
 * @see https://tinkoff.github.io/investAPI/users/#getinforequest
 */
$request = new GetInfoRequest();

/**
 * @var GetInfoResponse $response - Получаем ответ, содержащий информацию о пользователе
 */
list($response, $status) = $tinkoff_api->usersServiceClient->GetInfo($request)->wait();

/** Выводим полученную информацию */
var_dump(['user_info' => [
    'prem_status' => $response->getPremStatus(),
    'qual_status' => $response->getQualStatus(),
    'qualified_for_work_with' => $response->getQualifiedForWorkWith(),
]]);

/**
 * @var GetInfoResponse $response - Получаем ответ, содержащий информацию о пользователе
 */
list($response, $status) = $tinkoff_api->usersServiceClient->GetInfo($request)->wait();

/** Выводим полученную информацию */
var_dump(['user_info' => [
    'prem_status' => $response->getPremStatus(),
    'qual_status' => $response->getQualStatus(),
    'qualified_for_work_with' => $response->getQualifiedForWorkWith(),
]]);

```

Либо создавать клиенты доступа к сервисам напрямую: 

```phpt
/**
 * Ваш токен доступа к API
 *
 * @see https://tinkoff.github.io/investAPI/token/
 */
$token = '<Your Tinkoff Invest Account Token>';

/**
 * Создаем экземпляр подключения к сервису, используя {@link UsersServiceClient}
 */
$user_service_client = new UsersServiceClient(ClientConnection::getHostname(), ClientConnection::getOptions($token));

/**
 * Создаем экземпляр запроса информации об аккаунте к сервису
 *
 * Запрос не принимает никаких параметров на вход
 *
 * @see https://tinkoff.github.io/investAPI/users/#getinforequest
 */
$request = new GetInfoRequest();

/**
 * @var GetInfoResponse $response - Получаем ответ, содержащий информацию о пользователе
 */
list($response, $status) = $user_service_client->GetInfo($request)->wait();

/** Выводим полученную информацию */
var_dump(['user_info' => [
    'prem_status' => $response->getPremStatus(),
    'qual_status' => $response->getQualStatus(),
    'qualified_for_work_with' => $response->getQualifiedForWorkWith(),
]]);

```

Простенький пример подключения и чтения данных из Stream на основе MarketDataStreamClient (Стакан заявок по тикеру FB на глубину 10)

```phpt
/**
 * Ваш токен доступа к API
 *
 * @see https://tinkoff.github.io/investAPI/token/
 */
$token = '<Your Tinkoff Invest Account Token>';

/** Пример получения обновляемого через Stream ({@link MarketDataStreamServiceClient}) стакана по тикеру FB */

$factory = TinkoffClientsFactory::create($token);

/**
 * Пример получения справочника всех Shares инструментов
 *
 * PS: Само собой, если вам нужен только один инструмент, разумнее использовать метод GetInstrumentBy
 *
 * @see https://tinkoff.github.io/investAPI/instruments/#getinstrumentby
 * @see https://tinkoff.github.io/investAPI/instruments/#instrumentrequest
 */

$instruments_request = new InstrumentsRequest();
$instruments_request->setInstrumentStatus(InstrumentStatus::INSTRUMENT_STATUS_ALL);

/** @var SharesResponse $response */
list($response, $status) = $factory->instrumentsServiceClient->Shares($instruments_request)
    ->wait();

/** @var Instrument[] $instruments_dict */
$instruments_dict = $response->getInstruments();

/**
 * Находим в справочнике (коль он у нас весь есть) нужный нам инструмент
 */
foreach ($instruments_dict as $instrument) {
    if ($instrument->getTicker() === 'FB') {
        $meta_instrument = $instrument;

        break;
    }
}

if (empty($meta_instrument)) {
    echo('Instrument not found');

    die();
}

/** Создаем подписку на данные {@link MarketDataRequest}, конкретно по {@link SubscribeOrderBookRequest} по FIGI инструмента META/FB */
$subscription = (new MarketDataRequest())
    ->setSubscribeOrderBookRequest(
        (new SubscribeOrderBookRequest())
            ->setSubscriptionAction(SubscriptionAction::SUBSCRIPTION_ACTION_SUBSCRIBE)
            ->setInstruments([
                (new OrderBookInstrument())
                    ->setFigi($meta_instrument->getFigi())
                    ->setDepth(10)
            ])
    );

$stream = $factory->marketDataStreamServiceClient->MarketDataStream();
$stream->write($subscription);

/** В цикле получаем данные от сервера */

/** @var MarketDataResponse $market_data_response */
while ($market_data_response = $stream->read()) {
    if ($orderbook = $market_data_response->getOrderbook()) {
        /** @var Order[] $asks */
        $asks = $orderbook->getAsks();

        /** @var Order[] $bids */
        $bids = $orderbook->getBids();

        foreach ($asks as $ask) {
            $price = $ask->getPrice()
                    ->getUnits() + $ask->getPrice()
                    ->getNano() / pow(10, 9)
            ;

            echo 'ASK ' . $price . ' - ' . $ask->getQuantity() . PHP_EOL;
        }

        foreach ($bids as $bid) {
            $price = $bid->getPrice()
                    ->getUnits() + $bid->getPrice()
                    ->getNano() / pow(10, 9)
            ;

            echo 'BID ' . $price . ' - ' . $bid->getQuantity() . PHP_EOL;
        }

        echo 'Orderbook response finished' . PHP_EOL . PHP_EOL;
    }
}

$stream->cancel();
```
