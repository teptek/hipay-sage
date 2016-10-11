<?php
/**
 * Created by PhpStorm.
 * User: Ttek
 * Date: 16/06/15
 * Time: 17:53
 */

$json = file_get_contents('https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20%28%22HIPAY.PA%22%29&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys');
$obj = json_decode($json);

$finance_title = $obj->query->results->quote->symbol;
$finance_time = $obj->query->results->quote->LastTradeTime;
$finance_currency = $obj->query->results->quote->Currency;
$finance_price = $obj->query->results->quote->LastTradePriceOnly;
$finance_volume = $obj->query->results->quote->Volume;
$finance_change = $obj->query->results->quote->Change;
$finance_change_percent = $obj->query->results->quote->ChangeinPercent;

?>