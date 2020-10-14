<?php
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;


class Products{
    public static function getProduct($take = 100){
        $datas = collect([

            //1
           (object) [
               'thumbnail' => '/images/sano-gallery/organic-chicken.jpg',
               'title' => 'Organic Chicken',
               'description' => '
               <li> Improves immunity </li>
               <li> Reduces chances of cancer </li>
               <li> Improves heart health </li>
               <li> Improves sperm quality </li>
              ',
              'link' => 'https://foodpark.ng/fish-meat/24-40-dressed-chicken.html#/26-weight-10',

           ],
            //2
            (object) [
                'thumbnail' => '/images/sano-gallery/smoked-fish.png',
                'title' => 'Smoked Fish',
                'description' => '<li> Lowers blood pressure </li>
                <li> Promotes heart wellness</li>
                <li> Supports healthy Hair and Skin</li>
                <li> Supports eye health </li>',
                'link' => 'https://foodpark.ng/fish-meat/33-smoked-catfish.html',
            ],
             //3
           (object) [
            'thumbnail' => '/images/sano-gallery/sweet-basil-powder.jpg',
            'title' => 'Sweet Basil Powder',
            'description' => '<li> 	Boost the immune system  </li>
            <li>	Detoxifies the body </li>
            <li> 	Diabetes management </li>
            <li> Good for digestion</li>',
            'link' => 'https://foodpark.ng/spices/48-sweet-basil-powder.html',
        ],
         //4
         (object) [
            'thumbnail' => '/images/sano-gallery/bread.jpg',
            'title' => 'OFSP Bread',
            'description' => '<li> 	Boost the immune system  </li>
            <li>  Treats stomach ulcers  </li>
            <li>  Controls diabetes  </li>
            <li>  Prevents Vitamin A deficiency </li>',
            'link' => 'https://foodpark.ng/sano-bread/75-ofsp-bread.html',
        ],
         
         //5
         (object) [
            'thumbnail' => '/images/sano-gallery/trophical-basil-powder.png',
            'title' => 'Trophical Basil Powder',
            'description' => '<li> 	Boost the immune system  </li>
            <li> Detoxifies the body </li>
            <li> Diabetes management</li>
            <li> Good for digestion</li>',
            'link' => 'https://foodpark.ng/spices/49-tropical-basil-powder.html',
        ],
         
         //6
         (object) [
            'thumbnail' => '/images/sano-gallery/cookies.jpg',
            'title' => 'OFSP Cookies',
            'description' => '<li> 	Boost the immune system  </li>
            <li>  Treats stomach ulcers  </li>
            <li>  Controls diabetes  </li>
            <li>  Prevents Vitamin A deficiency </li>',
            'link' => '',
        ],

        //7
        (object) [
            'thumbnail' => '/images/sano-gallery/chili-pepper-powder.jpg',
            'title' => 'Chili Pepper Powder',
            'description' => '<li> 	Boosts immunity </li>
            <li> 	Reduces severe headache  </li>
            <li> 	Natural pain relief</li>
            <li> 	Cardiovascular benefits </li>',
            'link' => 'https://foodpark.ng/spices/46-chilli-pepper-powder.html',
        ],

         //8
         (object) [
            'thumbnail' => '/images/sano-gallery/cupcake.jpg',
            'title' => 'Cup Cake',
            'description' => '<li> 	Boost the immune system  </li>
            <li>  Treats stomach ulcers  </li>
            <li>  Controls diabetes  </li>
            <li>  Prevents Vitamin A deficiency </li>',
            'link' => '',
        ],

        //9
        (object) [
            'thumbnail' => '/images/sano-gallery/curry-powder.jpg',
            'title' => 'Curry Powder',
            'description' => '<li> 	Boost immunity </li>
            <li>  Blood purifier </li>
            <li>  Improves eye health </li>
            <li>  Promotes digestion </li>',
            'link' => 'https://foodpark.ng/spices/44-curry-powder.html',
        ],

        //10
        (object) [
            'thumbnail' => '/images/sano-gallery/fried-rice-seasoning.jpg',
            'title' => 'Fried Rice Seasoning',
            'description' => '<li> Boost immunity </li>
            <li> 	Promotes heart health  </li>
            <li> 	Contains anti-cancer properties  </li>
            <li> 	Promotes skin health </li>',
            'link' => 'https://foodpark.ng/spices/52-fried-rice-seasoning.html',
        ],

        //11
        (object) [
            'thumbnail' => '/images/sano-gallery/pepper-soup-seasoning.jpg',
            'title' => 'Pepper Soup Seasoning',
            'description' => '<li> Boosts immunity </li>
            <li> 	Reliefs heartburn  </li>
            <li> 	Detoxifies the body  </li>
            <li> 	Diabetes management </li>',
            'link' => 'https://foodpark.ng/spices/54-pepper-soup-seasoning.html',
        ],

        //12
        (object) [
            'thumbnail' => '/images/sano-gallery/sano-thyme-leaves.jpg',
            'title' => 'Sano Thyme Leaves',
            'description' => '<li> 	Boosts immunity </li>
            <li> 	Lowers blood pressure  </li>
            <li> 	Treats sore throat and coughing </li>
            <li> 	Aids fresher breath: gets rid of bad breath </li>',
            'link' => 'https://foodpark.ng/home/85-thyme-leaves.html',
        ],

        //13
        (object) [
            'thumbnail' => '/images/sano-gallery/turmeric-powder.jpg',
            'title' => 'Turmeric Powder',
            'description' => '<li> Cancer prevention </li>
            <li> 	Boosts the immune system </li>
            <li> 	It gives a glowing and healthy skin </li>
            <li> 	Promotes heart and blood vessel health </li>',
            'link' => 'https://foodpark.ng/spices/45-turmeric-powder.html',
        ],

        //14
        (object) [
            'thumbnail' => '/images/sano-gallery/all-soup-seasoning.png',
            'title' => 'All Soup Seasoning',
            'description' => '<li> Boosts immunity </li>
            <li> 	Aids digestion </li>
            <li> 	Promotes heart health </li>
            <li> 	Aids fresher breath: gets rid of bad breath </li>',
            'link' => 'https://foodpark.ng/spices/50-all-soup-seasoning.html',
        ],

        //15
        (object) [
            'thumbnail' => '/images/sano-gallery/jollof-rice-seasoning.png',
            'title' => 'Jollof Rice Seasoning',
            'description' => '<li> 	Boost immunity </li>
            <li> Aids weight loss </li>
            <li> Aids digestion </li>
            <li> Lowers blood sugar level </li>',
            'link' => 'https://foodpark.ng/spices/53-jollof-rice-seasoning.html',
        ],

        //16
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-laps.jpg',
            'title' => ' Chicken Laps',
            'description' => '<li> Improves immunity </li>
            <li> Reduces chances of cancer </li>
            <li> Improves heart health </li>
            <li> Improves sperm quality </li>',
            'link' => 'https://foodpark.ng/fish-meat/31-chicken-laps.html',
        ],

        //17
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-parts.jpg',
            'title' => ' 4 Parts Cut',
            'description' => '<li> Improves immunity </li>
            <li> Reduces chances of cancer </li>
            <li> Improves heart health </li>
            <li> Improves sperm quality </li>',
            'link' => 'https://foodpark.ng/fish-meat/27-4-part-cut.html',
        ],

        //18
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-pieces.jpg',
            'title' => '8 Parts Cut',
            'description' => '<li> Improves immunity </li>
            <li> Reduces chances of cancer </li>
            <li> Improves heart health </li>
            <li> Improves sperm quality </li>',
            'link' => 'https://foodpark.ng/fish-meat/28-59-8-parts-cut.html#/26-weight-10',
        ],

        //19
        (object) [
            'thumbnail' => '/images/sano-gallery/fresh-corn.jpg',
            'title' => 'Fresh Corn',
            'description' => '<li>	Enhances energy </li>
            <li> Preserves healthy skin </li>
            <li> Lowers blood sugar & cholesterol level </li>
            <li> Reduces the risk of Anemia </li>',
            'link' => 'https://foodpark.ng/staples-vegetables/37-fresh-corn.html',
        ],

        //20
        (object) [
            'thumbnail' => '/images/sano-gallery/fried-chicken.jpg',
            'title' => 'Grilled Chicken',
            'description' => '<li>	Improves immunity </li>
            <li> Reduces chances of cancer </li>
            <li> Improves heart health </li>
            <li> Promotes protein supply </li>',
            'link' => 'https://foodpark.ng/fish-meat/70-grilled-chicken.html',
        ],

        //21
        (object) [
            'thumbnail' => '/images/sano-gallery/garri.jpg',
            'title' => 'SANO Garri',
            'description' => '<li> Aids Digestion </li>
            <li> Improves Immune System </li>
            <li> Promotes Eye health </li>
            <li> Energizes and Cools the Body </li>',
            'link' => 'https://foodpark.ng/staples-vegetables/41-46-garri.html#/26-weight-10',
        ],

        //22
        (object) [
            'thumbnail' => '/images/sano-gallery/coconut-bread.png',
            'title' => 'OFSP Coconut Bread',
            'description' => '<li>	Highly nutritious </li>
            <li> Benefits heart health </li>
            <li> Promote blood sugar control </li>
            <li> Contains powerful antioxidants </li>',
            'link' => 'https://foodpark.ng/home/77-ofsp-coconut-bread.html',
        ],

        //23
        (object) [
            'thumbnail' => '/images/sano-gallery/mango-juice.jpg',
            'title' => 'Lemongrass Mango Juice',
            'description' => '<li> 	Anti – stress: helps you relax better </li>
            <li> Protects your body against infection </li>
            <li> It gives a healthy skin </li>
            <li> It aids easy digestion </li>',
            'link' => '',
        ],
        

        //24
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-2.jpg',
            'title' => ' Fresh Mint Leaf',
            'description' => '<li> 	Aids digestion and soothes upset bowel </li>
            <li>	Reduces symptoms of asthma </li>
            <li> 	Improves brain function </li>
            <li> Rich in Nutrients </li>',
            'link' => 'https://foodpark.ng/staples-vegetables/40-fresh-mint-leaf.html',
        ],

        //25
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-3.jpg',
            'title' => ' Fresh Sweet Basil ',
            'description' => '<li> 	Boost the immune system  </li>
            <li>	Detoxifies the body </li>
            <li> 	Diabetes management </li>
            <li> Good for digestion</li>',
            'link' => 'https://foodpark.ng/staples-vegetables/42-fresh-sweet-basil.html',
        ],

        //26
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-4.jpg',
            'title' => ' Fresh Lemongrass',
            'description' => '<li> Boost your immune system </li>
            <li> Protects your body against infection </li>
            <li> Gives a healthy skin </li>
            <li> Aids easy digestion </li>',
            'link' => 'https://foodpark.ng/staples-vegetables/39-fresh-lemongrass.html',
        ],

        //27
        (object) [
            'thumbnail' => '/images/sano-gallery/chicken-seasoning.png',
            'title' => 'Chicken Seasoning',
            'description' => '<li> Lowers blood sugar </li>
            <li> Prevents constipation </li>
            <li> Rich in nutrients </li>
            <li> Promotes heart health </li>',
            'link' => 'https://foodpark.ng/home/51-chicken-seasoning.html',
        ],

        //28
        (object) [
            'thumbnail' => '/images/sano-gallery/leaf-1.jpg',
            'title' => ' Fresh Scent Leaf ',
            'description' => '<li> 	Boost the immune system  </li>
            <li> Detoxifies the body </li>
            <li> Diabetes management</li>
            <li> Good for digestion</li>',
            'link' => 'https://foodpark.ng/staples-vegetables/43-fresh-scent-leaf.html',
        ],

        //29
        (object) [
            'thumbnail' => '/images/sano-gallery/meat.jpg',
            'title' => 'Pork',
            'description' => '<li> Promotes joint and bone health </li>
            <li> Promotes heart and blood vessel health </li>
            <li> Lowers body temperature </li>
            <li> Improves sleep quality and promotes deeper / more restful sleep </li>',
            'link' => 'https://foodpark.ng/fish-meat/29-pork.html',
        ],

        //30
        (object) [
            'thumbnail' => '/images/sano-gallery/ofsp-garri.jpg',
            'title' => 'OFSP Garri',
            'description' => '<li> 	Boosts immune system </li>
            <li> Treats stomach ulcers </li>
            <li> Prevents Vitamin A deficiency </li>
            <li> Protects your eyes from night blindness and age-related decline </li>',
            'link' => 'https://foodpark.ng/home/69-52-ofsp-garri.html#/26-weight-10',
        ],

        //31
        (object) [
            'thumbnail' => '/images/sano-gallery/pineapple-juice.jpg',
            'title' => 'Lemongrass Pineapple Juice',
            'description' => '<li> 	Anti – stress: helps you relax better </li>
            <li> Protects your body against infection </li>
            <li> It gives a healthy skin </li>
            <li> It aids easy digestion </li>',
            'link' => 'https://foodpark.ng/natural-drinks/76-lemongrass-juice-with-pineapple.html',
        ],

        //32
        (object) [
            'thumbnail' => '/images/sano-gallery/snail.jpg',
            'title' => 'Snail',
            'description' => '<li>	Boosts the immune system </li>
            <li> A Rich Source of Vitamins </li>
            <li> Possess anti-cancer properties </li>
            <li> Improves brain health </li>',
            'link' => 'https://foodpark.ng/fish-meat/68-snail.html',
        ],

        //33
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/jollof-rice-seasoning.png',
        //     'title' => 'Jollof Rice Seasoning',
        //     'description' => '<li> 	Anti – stress: helps you relax better </li>
        //     <li> Protects your body against infection </li>
        //     <li> It gives a healthy skin </li>
        //     <li> It aids easy digestion </li>',
        // ],

        //34
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/lemongrass-handwash.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        //35
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/lemongrass-hydrosol.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        //36
        // (object) [
        //     'thumbnail' => '/images/sano-gallery/lemongrass-liquid-soap.jpg',
        //     'title' => 'Turmeric Powder',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        //     incididunt ut labore et dolore magna aliqua.',
        // ],

        ])->take($take)->all();

        return $datas;
    }
}