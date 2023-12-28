<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Symptoms
 * @package App\Models
 * @version December 29, 2023, 2:16 am +06
 *
 * @property integer $user_id
 * @property string $username
 * @property string $title
 * @property string $details
 * @property string $image
 * @property string $note
 */
class Symptoms extends Model
{

    use HasFactory;

    public $table = 'symptoms';
    



    public $fillable = [
        'user_id',
        'username',
        'title',
        'details',
        'image',
        'note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'username' => 'string',
        'title' => 'string',
        'details' => 'string',
        'image' => 'string',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'nullable',
        'username' => 'nullable',
        'title' => 'nullable',
        'details' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'note' => 'nullable'
    ];

    
}
