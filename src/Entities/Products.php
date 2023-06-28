<?php
namespace Themhz\MiniOrm\Entities;
use Themhz\MiniOrm\Components\Model;

class Products extends Model{

    public function getTable()
    {
       return "products";
    }
}