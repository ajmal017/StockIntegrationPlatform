<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $type
 * @property string $subtitle
 * @property int $sort
 * @property string $created_at
 * @property string $updated_at
 */
class ProductType extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';
    protected $table ='product_types';
    /**
     * @var array
     */
    protected $fillable = ['type', 'subtitle', 'sort', 'created_at', 'updated_at'];

}
