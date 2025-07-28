<?php   //  Tag pembuka PHP. Wajib ada di setiap file PHP.

namespace App\Models;   //  File ini berada dalam namespace App\Models, yang berarti sesuai struktur Laravel untuk model.

use Illuminate\Database\Eloquent\Factories\HasFactory;  //  Mengimpor trait Laravel untuk mendukung pembuatan instance model dalam seeding/factory.
use Illuminate\Database\Eloquent\Model; //  Mengimpor class Model, class dasar untuk semua model Eloquent di Laravel.

class Setjamkerjadept extends Model //  Mendeklarasikan class Setjamkerjadept sebagai turunan (extends) dari Model. Ini adalah contoh dari inheritance OOP.
{
    use HasFactory; //  Menggunakan trait HasFactory, yang menyuntikkan method/mekanisme factory ke model ini. Ini adalah implementasi komposisi dalam OOP.
    protected $table = "konfigurasi_jk_dept_detail";    //  Menetapkan bahwa model ini berelasi dengan tabel konfigurasi_jk_dept_detail. Laravel default-nya akan mencari setjamkerjadepts, jadi ini untuk override.
}
//  Konsep OOP	Penerapan
//  Encapsulation	Properti $table diatur sebagai protected, menjaga akses hanya dalam class ini dan turunannya.
//  Inheritance	Class Setjamkerjadept mewarisi semua method dari Model, seperti find(), save(), all(), dll.
//  Abstraction	Laravel menyembunyikan detail implementasi akses database — cukup mendefinisikan model dan Laravel menangani query SQL-nya.
//  Trait / Composition	use HasFactory; menyisipkan kemampuan ke dalam class tanpa pewarisan, contoh dari komposisi.