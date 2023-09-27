<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;

    protected $table = 'danhmuc';
    protected $primaryKey = 'id'; // Đặt lại khóa chính (primary key) nếu cần thiết
    public $timestamps = false;
    protected $fillable = ['name_dm', 'bieutuong'];

    // Định nghĩa quan hệ với bảng 'sanpham'
    public function sanphams()
    {
        return $this->hasMany(SanPham::class, 'iddm', 'id');
    }
}
