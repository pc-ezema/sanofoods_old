<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Pick{

    public static function getProduct(){

        $datas = collect([

            (object)[
                'thumbnail' => '/images/sano-gallery/basil-bread.jpg',
                'product_name' => 'Basil Bread',
            ],

            (object)[
                'thumbnail' => '/images/sano-gallery/coconut-bread.jpg',
                'product_name' => 'Coconut Bread',
            ],

            (object)[
                'thumbnail' => '/images/sano-gallery/slice-bread.jpg',
                'product_name' => 'OFSP Bread',
            ],

            (object)[
                'thumbnail' => '/images/sano-gallery/lemongrass-bread.jpg',
                'product_name' => 'Lemongrass Bread',
            ],

            (object)[
                'thumbnail' => '/images/sano-gallery/wheat-bread.jpg',
                'product_name' => 'Wheat Bread',
            ],

            (object)[
                'thumbnail' => '/images/sano-gallery/bread-rolls.jpg',
                'product_name' => 'Bread Rolls',
            ],

        ])->all();
        return $datas;
    }

}