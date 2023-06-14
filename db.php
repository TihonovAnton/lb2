<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->lb2v5->items;
function get_items_by_vendor($vendor)
{
    global $collection;
    $result = $collection->find(['vendor' => $vendor]);
    return $result;
}
function get_raw_collection()
{
    global $collection;
    return $collection;
}
function get_items_by_price($min, $max)
{
    global $collection;
    $result = $collection->find(['price' => ['$gte' => (int)$min, '$lte' => (int)$max]]);
    return $result;
}
function get_items_in_stock()
{
    global $collection;
    $result = $collection->find(['count' => 0]);
    return $result;
}
?>