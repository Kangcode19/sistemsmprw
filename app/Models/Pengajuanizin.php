<?php   //  Awal file PHP. Wajib untuk menunjukkan bahwa file berisi skrip PHP.

namespace App\Models;   //  Menetapkan namespace dari class Pengajuanizin. Laravel menempatkan semua model di folder App\Models agar lebih terstruktur. 

use Illuminate\Database\Eloquent\Factories\HasFactory;  //  Mengimpor trait Laravel HasFactory untuk memungkinkan penggunaan model factory saat testing atau seeding.
use Illuminate\Database\Eloquent\Model; //  Mengimpor class Model dari Eloquent ORM. Semua model di Laravel biasanya mewarisi class ini.

class Pengajuanizin extends Model  //  Mendefinisikan class model Pengajuanizin dan mewarisi class Model. Ini adalah penerapan inheritance dalam OOP.class Pengajuanizin
{
    use HasFactory; //  Menerapkan trait HasFactory di class. Trait ini memberikan method dan properti tambahan untuk class model. Ini adalah penerapan composition.
    protected $table = 'pengajuan_izin';    //  Menentukan nama tabel yang digunakan oleh model. Laravel secara default menganggap tabelnya bernama pengajuanizins, 
                                            //  jadi ini digunakan untuk override nama tabel.
}
//  Konsep OOP penerapan dalam Kode
//  Encapsulation	protected $table adalah properti yang dienkapsulasi; tidak dapat diakses langsung dari luar class.
//  Inheritance	Pengajuanizin extends Model berarti model ini mewarisi semua kemampuan dari class Model seperti find(), save(), update(), dll.
//  Abstraction	Kita tidak perlu tahu detail bagaimana Laravel memetakan model ke database. Ini disembunyikan oleh class Model (abstraksi).
//  Trait (Composition)	use HasFactory; adalah penerapan trait untuk menyisipkan kemampuan tambahan ke class ini tanpa mewarisinya secara langsung.