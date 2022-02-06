<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexCon extends Controller
{
    // public function home(){
    //     return view('welcome');
    // }

    public function product(){
        $products = [
            ['id' => 1, 'name'=>'kit1', 'link'=>'img/products/kit1.jpeg', 'price'=>'1000$'],
            ['id' => 2, 'name'=>'kit2', 'link'=>'img/products/kit2.jpeg','price'=>'1000$'],
            ['id' => 3, 'name'=>'kit3', 'link'=>'img/products/kit3.jpeg','price'=>'1000$'],
            ['id' => 4, 'name'=>'kit4', 'link'=>'img/products/kit4.jpeg','price'=>'1000$'],
            ['id' => 5, 'name'=>'short1', 'link'=>'img/products/short1.jpeg','price'=>'1000$'],
            ['id' => 6, 'name'=>'short2', 'link'=>'img/products/short2.jpeg','price'=>'1000$'],
            ['id' => 7, 'name'=>'short3', 'link'=>'img/products/short3.jpeg','price'=>'1000$'],
            ['id' => 8, 'name'=>'short4', 'link'=>'img/products/short4.jpeg','price'=>'1000$'],
            ['id' => 9, 'name'=>'shoe1', 'link'=>'img/products/shoe1.jpeg','price'=>'1000$'],
            ['id' => 10, 'name'=>'shoe2', 'link'=>'img/products/shoe2.jpeg','price'=>'1000$'],
            ['id' => 11, 'name'=>'shoe3', 'link'=>'img/products/shoe3.jpeg','price'=>'1000$'],
            ['id' => 12, 'name'=>'shoe4', 'link'=>'img/products/shoe4.jpg','price'=>'1000$'],

        ];

        $category = [
            ['name'=>'Phones', 'link'=>'img/category1/1.jpg'],
            ['name'=>'watches', 'link'=>'img/category1/2.jpeg'],
            ['name'=>'sport_wear', 'link'=>'img/category1/3.jpg'],
            ['name'=>'others', 'link'=>'img/category1/4.jpg'],
        ];
        return view('page1', compact('products'), compact('category'));
    }

    public function details(){
        $products = [
            ['id' => 1, 'name'=>'kit1', 'link'=>'img/products/kit1.jpeg', 'price'=>'1000$'],
            ['id' => 2, 'name'=>'kit2', 'link'=>'img/products/kit2.jpeg','price'=>'1000$'],
            ['id' => 3, 'name'=>'kit3', 'link'=>'img/products/kit3.jpeg','price'=>'1000$'],
            ['id' => 4, 'name'=>'kit4', 'link'=>'img/products/kit4.jpeg','price'=>'1000$'],
            ['id' => 5, 'name'=>'short1', 'link'=>'img/products/short1.jpeg','price'=>'1000$'],
            ['id' => 6, 'name'=>'short2', 'link'=>'img/products/short2.jpeg','price'=>'1000$'],
            ['id' => 7, 'name'=>'short3', 'link'=>'img/products/short3.jpeg','price'=>'1000$'],
            ['id' => 8, 'name'=>'short4', 'link'=>'img/products/short4.jpeg','price'=>'1000$'],
            ['id' => 9, 'name'=>'shoe1', 'link'=>'img/products/shoe1.jpeg','price'=>'1000$'],
            ['id' => 10, 'name'=>'shoe2', 'link'=>'img/products/shoe2.jpeg','price'=>'1000$'],
            ['id' => 11, 'name'=>'shoe3', 'link'=>'img/products/shoe3.jpeg','price'=>'1000$'],
            ['id' => 12, 'name'=>'shoe4', 'link'=>'img/products/shoe4.jpg','price'=>'1000$'],

        ];
        $currentURL = url()->current();
        $str = strlen($currentURL);
        ;

        return view('product_details', compact('products'), ['url'=>$currentURL, 'str'=>$str]);
    }
    //
}
