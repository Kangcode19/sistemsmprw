<?php // membuka tag php awal dari script

namespace App\Models; // definisi ruangan nama yang berguna untuk mengatur lokasi  kelas di dalam struktur aplikasi laravel.

use Illuminate\Database\Eloquent\Factories\HasFactory;  // HasFactory digunakan untuk membuat instance model dalam pengujian 
                                                        //  (testing, seeding).
use Illuminate\Database\Eloquent\Model; // Model adalah class dasar dari Eloquent ORM di Laravel.

class Departemen extends Model  //   Mendefinisikan kelas departemen model penerapan 
                                //  inheritance (pewarisan) dalam OOP, di mana Departemen mewarisi properti dan metode dari Model. 
{
    use HasFactory; //  Menggunakan trait HasFactory,  yaitu teknik OOP untuk memasukkan reusable code ke dalam class. 
                    //   Ini termasuk ke dalam composition dan reusability dalam OOP.
    protected $table = "departemen";    //  Properti ini mendefinisikan nama tabel yang akan dipetakan oleh model ini. 
                                        //  Laravel biasanya menebak nama tabel dari nama model (plural), tapi kita override di sini.

}
//  Konsep OOP	Penerapan dalam Kode
//  Encapsulation	protected $table adalah contoh enkapsulasi karena hanya bisa diakses dalam class atau turunannya.
//  Inheritance	Departemen extends Model artinya Departemen mewarisi fungsionalitas dari Model Laravel (ORM).
//  Abstraction	Model Laravel menyembunyikan detail kompleks dari query SQL, kita hanya perlu mendeklarasikan model tanpa mengetahui logika query-nya.
//  Trait (mix-in)	use HasFactory adalah contoh penggunaan trait, yang memberikan fungsionalitas tambahan tanpa inheritance langsung.