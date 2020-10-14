<?php
namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;


class Faq{

    public static function getFaq(){
        $datas = collect  ([

            // 1
            (object)[
             'question' => 'What is the reason / rationale for organic production?',
             'answer' => 'Our passion and commitment to move the nation towards healthier food consumption has made us come up with this amazing organic and natural brand with highly competitive prices.
             Having heard of so many people both young and old suffering from abnormal growth, chronic and strange diseases which are as a result of the bio accumulation of toxic substances transferred from animals to man in form of antibiotics, vaccines and growth hormones given to the animals/crops. Then, we began to think on how to give the populace healthier food products which will eradicate the chemicals people consume and also help boost the immune system.
             ',
            ],

              // 2
              (object)[
                'question' => 'What is Organic Chicken?',
                'answer' => 'Organic chicken is a frozen chicken from broilers fed organically, without using vaccines, antibiotics and chemical growth hormones but with organic solution. We use extracts from natural herbs and spices (our organic solutions) which have gone through series of researches and tests to treat and feed the birds. The organic solutions used in raising the birds are beneficial to the birds and does not have any harmful residual effects when consumed.',
              ],

                // 3
            (object)[
                'question' => 'Are organic chicken claims genuine / are you sure it is truly organic?',
                'answer' => 'Yes, Organic chicken claims are genuine. Our poultry is managed by professionals using extracts from natural herbs and spices (our organic solutions) which have gone through series of researches and tests to treat and feed the birds. We raise our chicken to table size in seven (7) weeks ',
            ],

              // 4
              (object)[
                'question' => 'How is SANO organic chicken different from other chicken out there?',
                'answer' => 'Our organic chicken is one grown from start to finish without the use of growth hormones, vaccines,  and antibiotics which accumulates in the bodies of this poultry birds and when consumed causes and triggers varying types of strange diseases, such as cancer, kidney infection or failure and a host of other ones we hear of today. We therefore do not use these harmful chemicals used in the production of the regular chicken you have all around us today, rather we feed with herbs and spices extract which have undergone series of laboratory analysis. It is 100% organic.',
              ],

                // 5
            (object)[
                'question' => 'What are Organic spices and herbs?',
                'answer' => 'Organic spices and herbs are spices grown without the use of genetically engineered ingredients (GMOs), and do not contain synthetic caking agents and chemical additives which are responsible for high cases of sudden deaths and strange diseases. Fortify your health today with amazing varieties of organic spices from SANO FOODS. You can be rest assured that our spices are held to the highest standards from seed to plate.',
            ],
               

        ])->all();
        return $datas;
    }
}