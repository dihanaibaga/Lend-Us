<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    use HasFactory;
    protected $fillable = ['deskripsi_peminjaman', 'jumlah', 'jumlah', 'durasi','catatan'];
}
