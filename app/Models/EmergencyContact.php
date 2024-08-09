<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EmergencyContact
 * @package App\Models
 * @version August 9, 2024, 5:44 pm +06
 *
 * @property string $name
 * @property string $operator
 * @property string $phone
 * @property string $email
 * @property string $details
 * @property string $district
 * @property string $area
 * @property string $address
 * @property number $latitude
 * @property string $longtitude
 * @property string $map_address
 * @property string $status
 * @property string $type
 * @property string $image
 */
class EmergencyContact extends Model
{

    use HasFactory;

    public $table = 'emergency_contacts';
    



    public $fillable = [
        'name',
        'operator',
        'phone',
        'email',
        'details',
        'district',
        'area',
        'address',
        'latitude',
        'longtitude',
        'map_address',
        'status',
        'type',
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
        'operator' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'details' => 'string',
        'district' => 'string',
        'area' => 'string',
        'address' => 'string',
        'latitude' => 'double',
        'longtitude' => 'string',
        'map_address' => 'string',
        'status' => 'string',
        'type' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'operator' => 'required|string|max:191',
        'phone' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'details' => 'nullable|string|max:191',
        'district' => 'nullable|string|max:191',
        'area' => 'nullable|string|max:191',
        'address' => 'nullable|string|max:191',
        'map_address' => 'nullable|string|max:191'
    ];

    
}
