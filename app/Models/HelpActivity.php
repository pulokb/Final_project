<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class HelpActivity
 * @package App\Models
 * @version August 9, 2024, 7:23 pm +06
 *
 * @property \App\Models\HelpRequest $helpRequest
 * @property \App\Models\Volunteer $volunteer
 * @property string $activity
 * @property string $note
 * @property string $status
 * @property integer $help_request
 * @property integer $volunteer
 * @property string $image
 */
class HelpActivity extends Model
{

    use HasFactory;

    public $table = 'help_activities';
    



    public $fillable = [
        'activity',
        'note',
        'status',
        'help_request',
        'volunteer',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'activity' => 'string',
        'note' => 'string',
        'status' => 'string',
        'help_request' => 'integer',
        'volunteer' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function helpRequest()
    {
        return $this->belongsTo(\App\Models\HelpRequest::class, 'help_request', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function volunteer()
    {
        return $this->belongsTo(\App\Models\Volunteer::class, 'volunteer', 'id');
    }
}
