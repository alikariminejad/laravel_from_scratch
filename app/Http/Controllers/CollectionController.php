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

        $collection = collect(['a', 'b', 'a', 'c', 'b']);
        dd($collection -> duplicates());
    
    }}