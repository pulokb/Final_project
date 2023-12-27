<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DoctorFeedback
 * @package App\Models
 * @version December 28, 2023, 2:11 am +06
 *
 * @property integer $user_queries_id
 * @property integer $user_id
 * @property integer $admin_id
 * @property string $symptoms
 * @property string $suggestions
 * @property string $note
 */
class DoctorFeedback extends Model
{

    use HasFactory;

    public $table = 'doctor_feedbacks';
    



    public $fillable = [
        'user_queries_id',
        'user_id',
        'admin_id',
        'symptoms',
        'suggestions',
        'note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_queries_id' => 'integer',
        'user_id' => 'integer',
        'admin_id' => 'integer',
        'symptoms' => 'string',
        'suggestions' => 'string',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_queries_id' => 'nullable',
        'user_id' => 'nullable',
        'admin_id' => 'nullable',
        'symptoms' => 'nullable',
        'suggestions' => 'nullable',
        'note' => 'nullable'
    ];

    
}
