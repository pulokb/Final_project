<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class HelpRequest
 * @package App\Models
 * @version August 9, 2024, 5:09 pm +06
 *
 * @property \App\Models\HelpType $helpType
 * @property string $title
 * @property string $details
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $district
 * @property string $area
 * @property string $address
 * @property integer $help_type
 * @property integer $priority
 * @property boolean $status
 * @property string $image
 * @property string $video
 * @property string $resolve_time
 */
class HelpRequest extends Model
{

    use HasFactory;

    public $table = 'help_requests';




    public $fillable = [
        'title',
        'details',
        'name',
        'phone',
        'email',
        'district',
        'area',
        'address',
        'help_type',
        'priority',
        'status',
        'image',
        'video',
        'resolve_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'details' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'district' => 'string',
        'area' => 'string',
        'address' => 'string',
        'help_type' => 'integer',
        'priority' => 'string',
        'status' => 'string',
        'image' => 'string',
        'video' => 'string',
        'resolve_time' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:191',
        'name' => 'nullable|string|max:191',
        'phone' => 'nullable|string|max:191',
        'email' => 'nullable|string|max:191',
        'district' => 'nullable|string|max:191',
        'area' => 'nullable|string|max:191'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function helpType()
    {
        return $this->belongsTo(\App\Models\HelpType::class, 'help_type', 'id');
    }
}
