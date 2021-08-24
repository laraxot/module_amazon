<?php

declare(strict_types=1);

namespace Modules\Amazon\Models;

//use Modules\Rating\Models\Traits\RatingTrait;
//------services---------
//--- TRAITS ---
use Modules\Xot\Models\Traits\WidgetTrait;

class Home extends BaseModelLang {
    use WidgetTrait;
    //use RatingTrait; // non si vota la home
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'article_type', 'icon_src'];

    //--------- relationship ---------------

    //---------- mututars -----------
}//end model
