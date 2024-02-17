<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserQuery
 * @package App\Models
 * @version December 28, 2023, 1:14 am +06
 *
 * @property integer $user_id
 * @property integer $age
 * @property string $gender
 * @property string $physical_health
 * @property string $mental_health
 * @property string $therapist
 * @property string $medication
 * @property string $sleep_hours
 * @property string $sleep_quality
 * @property string $relationship_status
 * @property string $current_relationship
 * @property string $smoking_frequency
 * @property string $drinking_frequency
 * @property string $job_change
 * @property string $routine_change
 * @property string $tough_emotional
 */
class UserQuery extends Model
{

    use HasFactory;

    public $table = 'user_queries';




    public $fillable = [
        'user_id',
        'age',
        'gender',
        'physical_health',
        'mental_health',
        'therapist',
        'medication',
        'sleep_hours',
        'sleep_quality',
        'relationship_status',
        'current_relationship',
        'smoking_frequency',
        'drinking_frequency',
        'job_change',
        'routine_change',
        'tough_emotional'
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
        'physical_health' => 'string',
        'mental_health' => 'string',
        'therapist' => 'string',
        'medication' => 'string',
        'sleep_hours' => 'string',
        'sleep_quality' => 'string',
        'relationship_status' => 'string',
        'current_relationship' => 'string',
        'smoking_frequency' => 'string',
        'drinking_frequency' => 'string',
        'job_change' => 'string',
        'routine_change' => 'string',
        'tough_emotional' => 'string'
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
        'physical_health' => 'nullable',
        'mental_health' => 'nullable',
        'therapist' => 'nullable',
        'medication' => 'nullable',
        'sleep_hours' => 'nullable',
        'sleep_quality' => 'nullable',
        'relationship_status' => 'nullable',
        'current_relationship' => 'nullable',
        'smoking_frequency' => 'nullable',
        'drinking_frequency' => 'nullable',
        'job_change' => 'nullable',
        'routine_change' => 'nullable',
        'tough_emotional' => 'nullable',
    ];


}
