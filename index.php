<?php
namespace Themhz;
require 'vendor/autoload.php';

use Themhz\MiniOrm\Entities\Products;

//Update
/*$products = new Products();
$products->description = "souvlakia";
$products->quantity = 40;
$products->update()->where('name', '=', 'test1')->OrWhere("name","=","test2")->execute();*/


 //Insert
/*$products = new Products();
$products->name = "test2";
$products->description = "patataes 2";
$products->quantity = 35;
$products->price = 35;

$products->insert();*/


//Delete
//$products->delete()->where('id', '=', '1')->execute();

/*$products=new Products();
print_r($products->select()->where('name', '=', 'test1')->execute());*/

//print_r($results = $products->select()
//        ->where('price', '>', 10)
//        ->where('price', '<', 20)
//    ->execute());

//$results = $products->select()->where('id', '=', 2)->OrWhere('id', '=', 3)->execute();
//print_r($results);


/*$products = new Products();
$products->delete()->where('id', '=', '2')->orWhere('id','=',3)->execute();*/
/*$products = new Products();
$products->delete()->execute();

return;*/
/*$products = [];
$computerParts = [
    "CPU",
    "GPU",
    "RAM",
    "Motherboard",
    "Hard Drive",
    "SSD",
    "Power Supply",
    "Case",
    "Monitor",
    "Keyboard",
    "Mouse",
    "Headset",
    "Graphics Card",
    "Cooling Fan",
    "Ethernet Cable",
    "USB Hub",
    "Webcam",
    "Speakers",
    "Microphone",
    "Wi-Fi Adapter"
];
$product = new Products();
$product->beginTransaction();

for ($i = 0; $i < 10; $i++) {

    $product->name = "test" . ($i + 1);
    $product->description = $computerParts[rand(0, count($computerParts) - 1)];
    $product->quantity = rand(1, 100);
    $product->price = rand(1, 100);
    $product->insert();

    $products[] = $product;
}
$product->commit();*/



//#######################SELECTS#######################

/*$products = new Products();
$results = $products->select()->execute();

print_r($results);*/


/*$products = new Products();
$results = $products->select()
    ->orderBy('category', 'DESC')
    ->execute();

print_r($results);*/


/*$products = new Products();
$results = $products->select()
    ->where('quantity', '>', 10)
    ->orderBy('category', 'ASC')
    ->execute();

print_r($results);*/


/*$products = new Products();
$results = $products->select()
    ->fields("*")
    ->where('quantity', '>', 10)
    ->orderBy('category', 'ASC')
    ->execute();

print_r($results);*/


//$products = new Products();
//$results = $products->select()
//    ->fields('price','category')
//    ->where('quantity', '>', 10)
//    ->orderBy('category', 'DESC')
//    ->execute();
//
//print_r($results);


/*
$products = new Products();
$results = $products->select()
                    ->fields('sum(price)','category')
                    ->where('quantity', '>', 10)
                    ->orderBy('category', 'DESC')
                    ->groupBy('category')
                    ->execute();

print_r($results);*/


//#######################Joins#######################
/*$products = new Products();
$results = $products->select()->fields("*")
    ->join('INNER', 'category', 'category.id = products.category_id')
    ->execute();

print_r($results);*/

$products = new Products();
$results = $products->select()->fields("category.name as catname", "products.name as prodname")
    ->join('INNER', 'category', 'category.id = products.category_id')
    ->orderBy('catname','ASC')
    ->execute();

print_r($results);