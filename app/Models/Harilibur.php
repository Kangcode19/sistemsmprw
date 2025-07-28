<?php   //  Membuka tag PHP – menandakan bahwa isi file adalah kode PHP.

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harilibur extends Model   //  Harilibur extends Model menunjukkan pewarisan class — Harilibur mewarisi semua properti dan method dari Eloquent Model. 
{                               //  Laravel menyembunyikan detail teknis query database melalui abstraksi class Model, kita hanya butuh definisi model untuk mengakses database.
    use HasFactory;
    protected $table = "harilibur"; // protected $table adalah contoh properti yang dibatasi aksesnya, hanya bisa diakses oleh class sendiri atau subclass-nya.
}
//  Konsep OOP	Penjelasan dalam Kode
//  Encapsulation	protected $table adalah contoh properti yang dibatasi aksesnya, hanya bisa diakses oleh class sendiri atau subclass-nya.
//  Inheritance	Harilibur extends Model menunjukkan pewarisan class — Harilibur mewarisi semua properti dan method dari Eloquent Model.
//  Abstraction	Laravel menyembunyikan detail teknis query database melalui abstraksi class Model, kita hanya butuh definisi model untuk mengakses database.
//  Trait (Mix-in)	use HasFactory adalah implementasi trait, digunakan untuk menggabungkan reusable logic ke dalam class tanpa multiple inheritance.