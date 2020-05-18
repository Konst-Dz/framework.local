<?php

namespace Project\Controllers;
use Core\Controller;
use http\Env\Request;


class ProductController extends Controller
{

    private $products;

    public function __construct()
    {
        $this->products = [
            1 => [
                'name'     => 'product1',
                'price'    => 100,
                'quantity' => 5,
                'category' => 'category1',
            ],
            2 => [
                'name'     => 'product2',
                'price'    => 200,
                'quantity' => 6,
                'category' => 'category2',
            ],
            3 => [
                'name'     => 'product3',
                'price'    => 300,
                'quantity' => 7,
                'category' => 'category2',
            ],
            4 => [
                'name'     => 'product4',
                'price'    => 400,
                'quantity' => 8,
                'category' => 'category3',
            ],
            5 => [
                'name'     => 'product5',
                'price'    => 500,
                'quantity' => 9,
                'category' => 'category3',
            ],
        ];
    }

    public function show($param)
    {
        $this->title = 'Действие show контроллера product';
        var_dump($this->products[$param['n']]);
        return $this->render('product/show',[
            'name' => $this->products[$param['n']]['name'],
            'quantity' => $this->products[$param['n']]['quantity'],
            'price' => $this->products[$param['n']]['price'],
            'category' => $this->products[$param['n']]['category'],

        ]);
    }


}