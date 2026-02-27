<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // Menentukan nama tabel (opsional, tapi bagus untuk jaga-jaga)
    protected $table = 'siswas';

    // Daftarkan kolom yang boleh diisi sesuai tabel di database [cite: 19, 21, 22]
    protected $fillable = ['nama', 'umur', 'nilai'];
}