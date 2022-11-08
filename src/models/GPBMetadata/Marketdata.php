<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace GPBMetadata;

class Marketdata
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�P
marketdata.proto%tinkoff.public.invest.api.contract.v1common.proto"�
MarketDataRequestc
subscribe_candles_request (2>.tinkoff.public.invest.api.contract.v1.SubscribeCandlesRequestH h
subscribe_order_book_request (2@.tinkoff.public.invest.api.contract.v1.SubscribeOrderBookRequestH a
subscribe_trades_request (2=.tinkoff.public.invest.api.contract.v1.SubscribeTradesRequestH ]
subscribe_info_request (2;.tinkoff.public.invest.api.contract.v1.SubscribeInfoRequestH h
subscribe_last_price_request (2@.tinkoff.public.invest.api.contract.v1.SubscribeLastPriceRequestH Y
get_my_subscriptions (29.tinkoff.public.invest.api.contract.v1.GetMySubscriptionsH B	
payload"�
!MarketDataServerSideStreamRequesta
subscribe_candles_request (2>.tinkoff.public.invest.api.contract.v1.SubscribeCandlesRequestf
subscribe_order_book_request (2@.tinkoff.public.invest.api.contract.v1.SubscribeOrderBookRequest_
subscribe_trades_request (2=.tinkoff.public.invest.api.contract.v1.SubscribeTradesRequest[
subscribe_info_request (2;.tinkoff.public.invest.api.contract.v1.SubscribeInfoRequestf
subscribe_last_price_request (2@.tinkoff.public.invest.api.contract.v1.SubscribeLastPriceRequest"�
MarketDataResponsee
subscribe_candles_response (2?.tinkoff.public.invest.api.contract.v1.SubscribeCandlesResponseH j
subscribe_order_book_response (2A.tinkoff.public.invest.api.contract.v1.SubscribeOrderBookResponseH c
subscribe_trades_response (2>.tinkoff.public.invest.api.contract.v1.SubscribeTradesResponseH _
subscribe_info_response (2<.tinkoff.public.invest.api.contract.v1.SubscribeInfoResponseH ?
candle (2-.tinkoff.public.invest.api.contract.v1.CandleH =
trade (2,.tinkoff.public.invest.api.contract.v1.TradeH E
	orderbook (20.tinkoff.public.invest.api.contract.v1.OrderBookH N
trading_status (24.tinkoff.public.invest.api.contract.v1.TradingStatusH ;
ping	 (2+.tinkoff.public.invest.api.contract.v1.PingH j
subscribe_last_price_response
 (2A.tinkoff.public.invest.api.contract.v1.SubscribeLastPriceResponseH F

last_price (20.tinkoff.public.invest.api.contract.v1.LastPriceH B	
payload"�
SubscribeCandlesRequestV
subscription_action (29.tinkoff.public.invest.api.contract.v1.SubscriptionActionL
instruments (27.tinkoff.public.invest.api.contract.v1.CandleInstrument
waiting_close ("o
CandleInstrument
figi (	M
interval (2;.tinkoff.public.invest.api.contract.v1.SubscriptionInterval"�
SubscribeCandlesResponse
tracking_id (	X
candles_subscriptions (29.tinkoff.public.invest.api.contract.v1.CandleSubscription"�
CandleSubscription
figi (	M
interval (2;.tinkoff.public.invest.api.contract.v1.SubscriptionIntervalV
subscription_status (29.tinkoff.public.invest.api.contract.v1.SubscriptionStatus"�
SubscribeOrderBookRequestV
subscription_action (29.tinkoff.public.invest.api.contract.v1.SubscriptionActionO
instruments (2:.tinkoff.public.invest.api.contract.v1.OrderBookInstrument"2
OrderBookInstrument
figi (	
depth ("�
SubscribeOrderBookResponse
tracking_id (	^
order_book_subscriptions (2<.tinkoff.public.invest.api.contract.v1.OrderBookSubscription"�
OrderBookSubscription
figi (	
depth (V
subscription_status (29.tinkoff.public.invest.api.contract.v1.SubscriptionStatus"�
SubscribeTradesRequestV
subscription_action (29.tinkoff.public.invest.api.contract.v1.SubscriptionActionK
instruments (26.tinkoff.public.invest.api.contract.v1.TradeInstrument"
TradeInstrument
figi (	"�
SubscribeTradesResponse
tracking_id (	U
trade_subscriptions (28.tinkoff.public.invest.api.contract.v1.TradeSubscription"y
TradeSubscription
figi (	V
subscription_status (29.tinkoff.public.invest.api.contract.v1.SubscriptionStatus"�
SubscribeInfoRequestV
subscription_action (29.tinkoff.public.invest.api.contract.v1.SubscriptionActionJ
instruments (25.tinkoff.public.invest.api.contract.v1.InfoInstrument"
InfoInstrument
figi (	"�
SubscribeInfoResponse
tracking_id (	S
info_subscriptions (27.tinkoff.public.invest.api.contract.v1.InfoSubscription"x
InfoSubscription
figi (	V
subscription_status (29.tinkoff.public.invest.api.contract.v1.SubscriptionStatus"�
SubscribeLastPriceRequestV
subscription_action (29.tinkoff.public.invest.api.contract.v1.SubscriptionActionO
instruments (2:.tinkoff.public.invest.api.contract.v1.LastPriceInstrument"#
LastPriceInstrument
figi (	"�
SubscribeLastPriceResponse
tracking_id (	^
last_price_subscriptions (2<.tinkoff.public.invest.api.contract.v1.LastPriceSubscription"}
LastPriceSubscription
figi (	V
subscription_status (29.tinkoff.public.invest.api.contract.v1.SubscriptionStatus"�
Candle
figi (	M
interval (2;.tinkoff.public.invest.api.contract.v1.SubscriptionInterval>
open (20.tinkoff.public.invest.api.contract.v1.Quotation>
high (20.tinkoff.public.invest.api.contract.v1.Quotation=
low (20.tinkoff.public.invest.api.contract.v1.Quotation?
close (20.tinkoff.public.invest.api.contract.v1.Quotation
volume ((
time (2.google.protobuf.Timestamp1
last_trade_ts	 (2.google.protobuf.Timestamp"�
	OrderBook
figi (	
depth (
is_consistent (:
bids (2,.tinkoff.public.invest.api.contract.v1.Order:
asks (2,.tinkoff.public.invest.api.contract.v1.Order(
time (2.google.protobuf.TimestampB
limit_up (20.tinkoff.public.invest.api.contract.v1.QuotationD

limit_down (20.tinkoff.public.invest.api.contract.v1.Quotation"Z
Order?
price (20.tinkoff.public.invest.api.contract.v1.Quotation
quantity ("�
Trade
figi (	H
	direction (25.tinkoff.public.invest.api.contract.v1.TradeDirection?
price (20.tinkoff.public.invest.api.contract.v1.Quotation
quantity ((
time (2.google.protobuf.Timestamp"�
TradingStatus
figi (	T
trading_status (2<.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus(
time (2.google.protobuf.Timestamp"
limit_order_available_flag (#
market_order_available_flag ("�
GetCandlesRequest
figi (	(
from (2.google.protobuf.Timestamp&
to (2.google.protobuf.TimestampG
interval (25.tinkoff.public.invest.api.contract.v1.CandleInterval"\\
GetCandlesResponseF
candles (25.tinkoff.public.invest.api.contract.v1.HistoricCandle"�
HistoricCandle>
open (20.tinkoff.public.invest.api.contract.v1.Quotation>
high (20.tinkoff.public.invest.api.contract.v1.Quotation=
low (20.tinkoff.public.invest.api.contract.v1.Quotation?
close (20.tinkoff.public.invest.api.contract.v1.Quotation
volume ((
time (2.google.protobuf.Timestamp
is_complete ("$
GetLastPricesRequest
figi (	"^
GetLastPricesResponseE
last_prices (20.tinkoff.public.invest.api.contract.v1.LastPrice"�
	LastPrice
figi (	?
price (20.tinkoff.public.invest.api.contract.v1.Quotation(
time (2.google.protobuf.Timestamp"2
GetOrderBookRequest
figi (	
depth ("�
GetOrderBookResponse
figi (	
depth (:
bids (2,.tinkoff.public.invest.api.contract.v1.Order:
asks (2,.tinkoff.public.invest.api.contract.v1.OrderD

last_price (20.tinkoff.public.invest.api.contract.v1.QuotationE
close_price (20.tinkoff.public.invest.api.contract.v1.QuotationB
limit_up (20.tinkoff.public.invest.api.contract.v1.QuotationD

limit_down (20.tinkoff.public.invest.api.contract.v1.Quotation"\'
GetTradingStatusRequest
figi (	"�
GetTradingStatusResponse
figi (	T
trading_status (2<.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus"
limit_order_available_flag (#
market_order_available_flag ( 
api_trade_available_flag ("v
GetLastTradesRequest
figi (	(
from (2.google.protobuf.Timestamp&
to (2.google.protobuf.Timestamp"U
GetLastTradesResponse<
trades (2,.tinkoff.public.invest.api.contract.v1.Trade"
GetMySubscriptions*�
SubscriptionAction#
SUBSCRIPTION_ACTION_UNSPECIFIED !
SUBSCRIPTION_ACTION_SUBSCRIBE#
SUBSCRIPTION_ACTION_UNSUBSCRIBE*�
SubscriptionInterval%
!SUBSCRIPTION_INTERVAL_UNSPECIFIED $
 SUBSCRIPTION_INTERVAL_ONE_MINUTE&
"SUBSCRIPTION_INTERVAL_FIVE_MINUTES*�
SubscriptionStatus#
SUBSCRIPTION_STATUS_UNSPECIFIED 
SUBSCRIPTION_STATUS_SUCCESS,
(SUBSCRIPTION_STATUS_INSTRUMENT_NOT_FOUND6
2SUBSCRIPTION_STATUS_SUBSCRIPTION_ACTION_IS_INVALID(
$SUBSCRIPTION_STATUS_DEPTH_IS_INVALID+
\'SUBSCRIPTION_STATUS_INTERVAL_IS_INVALID)
%SUBSCRIPTION_STATUS_LIMIT_IS_EXCEEDED&
"SUBSCRIPTION_STATUS_INTERNAL_ERROR)
%SUBSCRIPTION_STATUS_TOO_MANY_REQUESTS*d
TradeDirection
TRADE_DIRECTION_UNSPECIFIED 
TRADE_DIRECTION_BUY
TRADE_DIRECTION_SELL*�
CandleInterval
CANDLE_INTERVAL_UNSPECIFIED 
CANDLE_INTERVAL_1_MIN
CANDLE_INTERVAL_5_MIN
CANDLE_INTERVAL_15_MIN
CANDLE_INTERVAL_HOUR
CANDLE_INTERVAL_DAY2�
MarketDataService�

GetCandles8.tinkoff.public.invest.api.contract.v1.GetCandlesRequest9.tinkoff.public.invest.api.contract.v1.GetCandlesResponse�
GetLastPrices;.tinkoff.public.invest.api.contract.v1.GetLastPricesRequest<.tinkoff.public.invest.api.contract.v1.GetLastPricesResponse�
GetOrderBook:.tinkoff.public.invest.api.contract.v1.GetOrderBookRequest;.tinkoff.public.invest.api.contract.v1.GetOrderBookResponse�
GetTradingStatus>.tinkoff.public.invest.api.contract.v1.GetTradingStatusRequest?.tinkoff.public.invest.api.contract.v1.GetTradingStatusResponse�
GetLastTrades;.tinkoff.public.invest.api.contract.v1.GetLastTradesRequest<.tinkoff.public.invest.api.contract.v1.GetLastTradesResponse2�
MarketDataStreamService�
MarketDataStream8.tinkoff.public.invest.api.contract.v1.MarketDataRequest9.tinkoff.public.invest.api.contract.v1.MarketDataResponse(0�
MarketDataServerSideStreamH.tinkoff.public.invest.api.contract.v1.MarketDataServerSideStreamRequest9.tinkoff.public.invest.api.contract.v1.MarketDataResponse0Ba
ru.tinkoff.piapi.contract.v1PZ./;investapi�TIAPI�Tinkoff.InvestApi.V1�Tinkoff\\Invest\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

