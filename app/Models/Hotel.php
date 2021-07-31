<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';
    
    protected $fillable = [
        'id',
        'country_id',
        'city_id',
        'username',
        'password',
        'status_id',
        'markup_id',
        'cancellation_charge_id',
        'hotel_type_id',
        'sop_id',
        'wholesaler_id',
        'staff_id',
        'rate_id',
        'name',
        'street_address',
        'postcode_zip_code',
        'email',
        'tel_number',
        'fax_number',
        'hotel_description',
        'location_description',
        'room_description',
        'restaurant_description',
        'general_description',
        'remark',
        'type',
        'rating',
        'no_of_room',
        'website',
        'most_view',
        'best_deal',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'map',
        'guarantee',
        'guarantee_from',
        'guarantee_to',
        'payment_method',
        'wholesaler',
        'prior_arrival',
        'night_charge',
        'cancelation_description',
        'status'
    ];

    public function country() {
        
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    public function city() {
        
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    public function booking() {
        
        return $this->hasMany('App\Models\Booking');
    }
}
