<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['nama','email','tempat_tanggalLahir','agama','Asal_Sekolah','Alamat_Sekolah','Program_Keahlihan','Nomor_Induk','AlamatRumah','notelp_Pribadi','notelp_OrangTua'];
}
