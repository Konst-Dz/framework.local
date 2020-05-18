<?php


namespace Project\Controllers;
use Core\Controller;

class NumController extends Controller
{
    public function sum($param){
        var_dump($param);
        echo array_sum($param);
    }


}