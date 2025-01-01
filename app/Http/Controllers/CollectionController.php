<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CollectionController extends Controller{
    public function index(){
        echo '<h1>Collections</h1>';

        // $collection =  collect([100,20,39,405,555,62,7,88,99,10]);
        // // dd($collection -> all());
        // // dd($collection -> sum());
        // // dd($collection -> avg());
        // // dd($collection -> sortDesc());
        // $collection = collect(['ali', 'john', 'david', null]) -> map(function($name, $key){
        //     return Str::upper($name);
        // }) -> reject(function($name){
        //     return empty($name);
        // });
        // dd($collection -> all());
    //     $collection =  collect([100,20,39,405,555,62,7,88,99,10]) -> sort();
    //     $collection = $collection -> chunk(3);
    //     // dd($collection -> all());
    //     foreach ($collection -> all() as $item){{

    //         foreach ($item as $child){
    //             echo $child . '<br/>';
    //         }
    //         echo '------------------------<br/>';
    //     }
    // }
        // $collection = collect([
        //     [1,2,3],
        //     [4,5,6],
        //     [7,8,9],
        // ]);
        // dd($collection -> collapse() -> all());
        // $collection =  collect([100,20,39,405,555,62,7,88,99,10]) -> contains(function($items){
        //     return $items >= 500;
        // });
        // dd($collection);
        // $collection = collect(['name' => 'Desk', 'price' => 100]);
        // dd($collection -> count(), $collection -> countBy());

        // $collection = collect([1,2,3,4,5]);
        // $collection1 = collect([3,4,5,6,7]);
        // dd($collection -> diff($collection1));

//        $collection = collect(['a', 'b', 'a', 'c', 'b']);
//        dd($collection -> duplicates());
//        $collection = collect([100,20,39,405,555,62,7,88,99,10])->filter(function($numbers){
//            return $numbers < 100;
//        });
//        dd($collection -> sort() -> all());

//        $collection = collect([
//            'name' => 'Ali',
//            'Language' => [
//                'php', 'javascript'
//            ]
//        ]) -> flatten();
//        dd($collection -> all());
//        $collection = collect([
//                                ['account_id' => 'account-x10', 'product' => 'Chair'],
//                                ['account_id' => 'account-x10', 'product' => 'Bookcase'],
//                                ['account_id' => 'account-x11', 'product' => 'Desk']
//        ]) -> groupBy('account_id');
//        dd($collection -> all());
//    $collection = collect(['account_id' => 1, 'product' => 'Desk', 'amount' => 5]) -> has('product');
//    dd($collection);
//        $collection = collect([
//                                ['product_id' => 'prod-100', 'name' => 'Desk'],
//                                ['product_id' => 'prod-200', 'name' => 'Laptop'],
//        ]);
//        dd($collection-> pluck('product_id') -> all());
        $collection = collect([
                                ['product' => 'Desk', 'price' => 100],
                                ['product' => 'Desk_4', 'price' => 200],
                                ['product' => 'Desk_3', 'price' => 300],
                                ['product' => 'Desk_2', 'price' => 400],
        ]);
//        dd($collection-> where('price', '<', 300) -> all());
        dd($collection-> whereBetween('price', [200, 300]) -> all());

    }}

