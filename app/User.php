<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','pendidikan','alamat'];
}
