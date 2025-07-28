<?php   //  Tag pembuka PHP, wajib ada untuk file PHP.

namespace App\Models;   //  Menyatakan bahwa file ini berada di namespace App\Models, 
                        //  sesuai struktur Laravel untuk model.

use Illuminate\Database\Eloquent\Factories\HasFactory;  //  Mengimpor trait Laravel HasFactory, yang memungkinkan model ini digunakan dalam seeding dan factory.
use Illuminate\Database\Eloquent\Model; //  Mengimpor class dasar Model dari Eloquent ORM Laravel. Semua model Eloquent harus extend dari class ini.

class Setjamkerja extends Model //  Mendefinisikan class model Setjamkerja dan mewarisi (extends) dari class Model — contoh penerapan inheritance OOP
{
    use HasFactory; //  Menggunakan trait HasFactory — penerapan konsep komposisi di OOP untuk menyisipkan fitur tambahan.
    protected $table = "konfigurasi_jamkerja";  //  Menentukan secara eksplisit bahwa model ini menggunakan tabel konfigurasi_jamkerja. Laravel default-nya akan mencari setjamkerjas.
}
//  Konsep OOP	Penerapan
//  Encapsulation	$table dideklarasikan sebagai protected, artinya tidak bisa diakses secara langsung dari luar class — contoh enkapsulasi data.
//  Inheritance	Setjamkerja extends Model artinya class ini mewarisi method dan property dari class Model, seperti all(), find(), save(), dll.
//  Abstraction	Developer cukup membuat class dan mengatur nama tabel; detail teknis query dan interaksi DB disembunyikan oleh Eloquent ORM.
//  Trait / Composition	use HasFactory adalah cara untuk menyisipkan kode reusable tanpa inheritance — ini adalah komposisi dalam OOP.