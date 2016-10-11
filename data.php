<?php
header("Content-Type: text/javascript");

$path  = '/tmp';
$cache = $path . DIRECTORY_SEPARATOR . 'data-finance-cache.js';

if (file_exists($cache)) {
    echo file_get_contents($cache);
    exit;
}

// create curl resource
$ch = curl_init();

$startM = 1;
$startD = 1;
$startY = 2000;

$todayM = (int)date('m');
$todayD = (int)date('d');
$todayY = (int)date('Y');

// http://ichart.finance.yahoo.com/table.csv?s=TICKER&a=fM&b=fD&c=fY&d=M&e=D&f=Y
$url = 'http://ichart.finance.yahoo.com/table.csv?s=HIPAY.PA&a=' . $startM . '&b=' . $startD . '&c=' . $startY . '&d=' . $todayM . '&e=' . $todayD . '&f=' . $todayY;


// set url
curl_setopt($ch, CURLOPT_URL, $url);

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSLVERSION, 3);

// $output contains the output string
$csv = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);

// Date,Open,High,Low,Close,Volume,Adj Close
// 2015-06-16,2.08,2.09,2.03,2.08,151800,2.08
// 2015-06-15,2.08,2.10,2.06,2.08,72600,2.08

$quotes = array();

foreach (explode("\n", $csv) as $line) {
    $data = str_getcsv($line, ',');

    if (count($data) == 0 or $data[0] == '' or $data[0] == 'Date') {
        continue;
    }

    $date = strtotime($data[0]);

    $quotes[] = (object)array(
        'date'   => date('Y-m-d', $date),
        'value'  => (float)$data[4],
        'volume' => (int)$data[5]
    );
}

$js = 'var stockChartData = ' . json_encode($quotes);

//file_put_contents($cache, $js);

echo $js;