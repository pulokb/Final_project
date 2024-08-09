<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class HelpType
 * @package App\Models
 * @version August 9, 2024, 5:08 pm +06
 *
 * @property string $name
 * @property string $details
 * @property boolean $status
 * @property string $image
 */
class HelpType extends Model
{

    use HasFactory;

    public $table = 'help_types';




    public $fillable = [
        'name',
        'details',
        'status',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'details' => 'string',
        'status' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'details' => 'nullable|string|max:191'
    ];


}
