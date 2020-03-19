<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $news_id
 * @property string $img
 * @property int $sort
 */
class News_img extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'News_imgs';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'news_id', 'img', 'sort'];

}
