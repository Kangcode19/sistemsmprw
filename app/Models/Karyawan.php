<?php // Tag pembuka untuk file PHP.

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Karyawan extends Authenticatable  //  inheritance Karyawan extends Authenticatable berarti class ini mewarisi seluruh fitur dari Laravel Authenticatable, 
                                        //  termasuk autentikasi user (login, password hash, dsb).
                                        //  Polymorphism Jika class Authenticatable memiliki method seperti getAuthIdentifierName(), 
                                        // class ini bisa override method tersebut dengan fungsionalitas baru.
{
    use HasApiTokens, HasFactory, Notifiable;   //  Trait (composition) use HasFactory, Notifiable, HasApiTokens 
                                                // adalah penerapan trait untuk menggabungkan kemampuan tambahan ke dalam class ini.

    protected $table = "karyawan";
    protected $primaryKey = "nik";
    public $incrementing = false;
    protected $fillable = [ // Encapsulation Properti seperti $fillable, $hidden, dan $casts ditandai protected, artinya hanya bisa diakses dari class sendiri atau turunan.
        'nik',
        'nama_lengkap',
        'jabatan',
        'no_hp',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
//  Konsep OOP	Penerapan dalam Kode
//  Encapsulation Properti seperti $fillable, $hidden, dan $casts ditandai protected, artinya hanya bisa diakses dari class sendiri atau turunan.
//  Inheritance	Karyawan extends Authenticatable berarti class ini mewarisi seluruh fitur dari Laravel Authenticatable, termasuk autentikasi user (login, password hash, dsb).
//  Polymorphism Jika class Authenticatable memiliki method seperti getAuthIdentifierName(), class ini bisa override method tersebut dengan fungsionalitas baru.
//  Trait (Composition)	use HasFactory, Notifiable, HasApiTokens adalah penerapan trait untuk menggabungkan kemampuan tambahan ke dalam class ini.
