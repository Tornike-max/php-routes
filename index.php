<?php

use app\Invoice;
use app\InvoiceCollection;
use app\Router;

require_once './vendor/autoload.php';
// $invoiceCollection = new InvoiceCollection([new Invoice(25), new Invoice(20), new Invoice(63)]);


// foreach ($invoiceCollection as $invoice) {
//     echo $invoice->id . ' - ' . $invoice->amount . PHP_EOL;
// }


$route = new Router();

$route->register('/', function () {
    echo 'home';
});
$route->register('/invoice', function () {
    echo 'invoice';
});


echo $route->resolve($_SERVER['REQUEST_URI']);
