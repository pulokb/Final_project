<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UserQuery
 * @package App\Models
 * @version December 28, 2023, 1:14 am +06
 *
 * @property integer $user_id
 * @property integer $age
 * @property string $gender
 * @property string $physical_rating
 * @property string $mental_rating
 * @property string $dailylife_problems
 * @property string $affected_ability
 * @property string $low_down
 * @property string $affected_relationship
 * @property string $experience
 * @property string $note
 */
class UserQuery extends Model
{

    use HasFactory;

    public $table = 'user_queries';
    



    public $fillable = [
        'user_id',
        'age',
        'gender',
        'physical_rating',
        'mental_rating',
        'dailylife_problems',
        'affected_ability',
        'low_down',
        'affected_relationship',
        'experience',
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
        'age' => 'integer',
        'gender' => 'string',
        'physical_rating' => 'string',
        'mental_rating' => 'string',
        'dailylife_problems' => 'string',
        'affected_ability' => 'string',
        'low_down' => 'string',
        'affected_relationship' => 'string',
        'experience' => 'string',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'nullable',
        'age' => 'nullable',
        'gender' => 'nullable',
        'physical_rating' => 'nullable',
        'mental_rating' => 'nullable',
        'dailylife_problems' => 'nullable',
        'affected_ability' => 'nullable',
        'low_down' => 'nullable',
        'affected_relationship' => 'nullable',
        'experience' => 'nullable',
        'note' => 'nullable'
    ];

    
}
