<?php

declare(strict_types=1);

namespace Modules\Amazon\Models;

//use Modules\Rating\Models\Traits\RatingTrait;
//------services---------
//--- TRAITS ---
use Modules\Xot\Models\Traits\WidgetTrait;
use Sushi\Sushi;

class Home extends BaseModelLang {
    use WidgetTrait;
    //use RatingTrait; // non si vota la home
    use Sushi;
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'article_type', 'icon_src'];
    /*
    protected $rows = [
        [
            'id' => 'home',
            'name' => 'New York',
        ],
    ];
    */

    //--------- relationship ---------------

    //---------- mututars -----------
    //---------- functions ----------
    /**
     * GetRows.
     */
    public function getRows() {
        return [
            [
                'id' => 1,
            ],
        ];
    }
}//end model