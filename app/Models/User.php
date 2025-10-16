<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [
        'id',
    ];

    // * Mengubah Date ke Umur
    public function age()
    {
        $dob = Carbon::parse($this->attributes['ttl']);
        $now = Carbon::now();

        // Hitung perbedaan tahun dan bulan
        $ageYears = $dob->diffInYears($now);
        $ageMonths = $dob->addYears($ageYears)->diffInMonths($now);

        // Format output
        $ageString = '';

        if ($ageYears > 0) {
            $ageString .= $ageYears . ' tahun';
        }

        if ($ageMonths > 0) {
            $ageString .= ($ageString ? ' ' : '') . $ageMonths . ' bulan';
        }

        return $ageString;
    }
    // protected

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
