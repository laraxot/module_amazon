<?php

declare(strict_types=1);

namespace Modules\Amazon\Models;

use Illuminate\Database\Eloquent\Model;
////use Laravel\Scout\Searchable;
//---------- traits
use Modules\Xot\Contracts\ModelContract;
use Modules\Lang\Models\Traits\LinkedTrait;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModelLang.
 */
abstract class BaseModelLang extends Model implements ModelContract {
    use Updater;
    //use Searchable;
    use LinkedTrait;

    /**
     * @var string[]
     */
    protected $fillable = ['id'];

    /**
     * @var array
     */
    protected $casts = [
        //'published_at' => 'datetime:Y-m-d', // da verificare
    ];

    /**
     * @var string[]
     */
    protected $dates = ['published_at', 'created_at', 'updated_at'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */
    protected $hidden = [
        //'password'
    ];

    /**
     * @var bool
     */
    public $timestamps = true;

    //-----------
    /*
    protected $id;
    protected $post;
    protected $lang;
    */
}
