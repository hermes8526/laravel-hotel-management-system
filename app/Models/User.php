<?php
  
namespace App\Models;
  
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

  
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'password',
        'email',
        'remember_token',
        'contact',
        'website',
        'address',
        'country_id',
        'state_id',
        'city_id',
        'postcode',
        'credit_limit',
        'remarks',
        'commission',
        'status',
        'salutation',
        'firstname',
        'lastname',
        'designation',
        'mobile1',
        'tel1',
        'fax1',
        'mobile2',
        'tel2',
        'fax2',
        'email2'
    ];
  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
  
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function country() {
        
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    public function city() {
        
        return $this->belongsTo('App\Models\City', 'city_id');
    }

}