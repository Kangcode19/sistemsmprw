<?php
// Menentukan namespace agar class ini bisa diakses dengan struktur App\Models
namespace App\Models;

// Mengimpor berbagai komponen penting dari Laravel
use Illuminate\Contracts\Auth\MustVerifyEmail;  // (tidak dipakai langsung tapi sering digunakan untuk verifikasi email)
use Illuminate\Database\Eloquent\Factories\HasFactory;  // Untuk pembuatan data dummy (seeding/testing)
use Illuminate\Foundation\Auth\User as Authenticatable; //  Base class untuk user autentikasi
use Illuminate\Notifications\Notifiable;    //  Untuk mengirim notifikasi ke user
use Laravel\Sanctum\HasApiTokens;   //  Untuk mengirim notifikasi ke user
use Spatie\Permission\Traits\HasRoles;  //  Untuk otentikasi berbasis token API

//  Deklarasi class User yang mewarisi class Authenticatable (OOP: Inheritance)
class User extends Authenticatable
{
    use HasFactory;
    //  Trait yang digunakan untuk menambahkan fungsi tambahan (OOP: Polymorphism via Trait)
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    //  Daftar atribut yang dapat diisi melalui mass assignment (OOP: Encapsulation)
    protected $table = "admins";
    protected $fillable = [
        'name',
        'email',
        'password',
        'kode_dept',
        'kode_cabang'
    ];

    // Atribut yang disembunyikan saat model dikonversi ke array/JSON (OOP: Encapsulation)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Atribut yang akan dikonversi otomatis ke tipe data lain, seperti DateTime (OOP: Abstraction)
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
//  Konsep OOP	Contoh Implementasi	Penjelasan Singkat
//  Inheritance	class User extends Authenticatable	Pewarisan class dari Laravel untuk fitur autentikasi.
//  Encapsulation	protected $fillable, $hidden	Akses data dibatasi, hanya yang diizinkan yang dapat diakses dari luar class.
//  Abstraction	$casts, Trait	Laravel menyembunyikan detail teknis (misal: format waktu, token API)
//  Polymorphism	Trait (use HasApiTokens...)	Trait memberi fleksibilitas perilaku tambahan pada class User
