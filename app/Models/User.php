<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gym_id', 'firstname', 'middlename', 'lastname', 'gender', 'date_of_birth', 'phone', 'mobile', 'cnic', 'email', 'password', 'address', 'height', 'weight'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public const GENDER = [
        'Male' => 'Male',
        'Female' => 'Female',
        'Other' => 'Other',
    ];

    public function setHeightAttribute($value)
    {
        $this->attributes['height'] = $value;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
    }

    public function getDateOfBirthFormatAttribute()
    {
        return Carbon::parse($this->date_of_birth)->format('d-m-Y');
    }

    public function getFullHeightAttribute()
    {
        return explode(' ', $this->height);
    }

    public function getFullNameAttribute()
    {
        return $this->firstname ." ". $this->middlename ." ". $this->lastname;
    }


    public function feeStructure(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(FeeStructure::class);
    }


}
