<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table="matakuliah"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false; 
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    /**
     * The attributes that are mass assignable.
     *
     * 
     */

    protected $fillable = [
        'id',
        'nama_matkul',
        'sks',
        'jam',
        'semester'
    ];

    public  function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_matakuliah', 'mahasiswa_id', 'matakuliah_id');
    }

    public  function mahasiswa_matakuliah()
    {
        return $this->belongsTo(Mahasiswa_MataKuliah::class);
    }
}
