<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;

    protected $table = 'theloai';
    protected $primaryKey = 'id'; // Đặt lại khóa chính (primary key) nếu cần thiết
    public $timestamps = false;
    protected $fillable = ['name_tl'];

    // Định nghĩa quan hệ với bảng 'sanpham'
    public function sanphams()
    {
        return $this->hasMany(SanPham::class, 'idtl', 'id');
    }
}
