<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Volunteer
 * @package App\Models
 * @version August 9, 2024, 7:10 pm +06
 *
 * @property string $name
 * @property string $profession
 * @property string $designation
 * @property string $identity_type
 * @property string $identity
 * @property string $phone
 * @property string $email
 * @property string $blood_group
 * @property string $details
 * @property string $district
 * @property string $area
 * @property string $address
 * @property number $latitude
 * @property number $longtitude
 * @property string $map_address
 * @property string $status
 * @property string $type
 * @property string $approval
 * @property integer $user_id
 * @property string $description
 * @property string $interest
 * @property string $refer_code
 * @property string $referance
 * @property string $birth_date
 * @property string $joining_date
 * @property string $image
 * @property string $attachment
 */
class Volunteer extends Model
{

    use HasFactory;

    public $table = 'volunteers';
    



    public $fillable = [
        'name',
        'profession',
        'designation',
        'identity_type',
        'identity',
        'phone',
        'email',
        'blood_group',
        'details',
        'district',
        'area',
        'address',
        'latitude',
        'longtitude',
        'map_address',
        'status',
        'type',
        'approval',
        'user_id',
        'description',
        'interest',
        'refer_code',
        'referance',
        'birth_date',
        'joining_date',
        'image',
        'attachment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'profession' => 'string',
        'designation' => 'string',
        'identity_type' => 'string',
        'identity' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'blood_group' => 'string',
        'details' => 'string',
        'district' => 'string',
        'area' => 'string',
        'address' => 'string',
        'latitude' => 'double',
        'longtitude' => 'double',
        'map_address' => 'string',
        'status' => 'string',
        'type' => 'string',
        'approval' => 'string',
        'user_id' => 'integer',
        'description' => 'string',
        'interest' => 'string',
        'refer_code' => 'string',
        'referance' => 'string',
        'birth_date' => 'date',
        'joining_date' => 'date',
        'image' => 'string',
        'attachment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
