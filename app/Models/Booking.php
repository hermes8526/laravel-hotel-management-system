<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'id',
        'booking_date',
        'no',
        'booking_type',
        'cfm_no',
        'hotel_id',
        'rooms',
        'check_in',
        'check_out',
        'amount',
        'handle_by',
        'reason'
    ];

    public function user() {

        return $this->belongsTo('App\Model\User');
    }
    
    public function hotel() {

        return $this->belongsTo('App\Models\Hotel');
    }
}
