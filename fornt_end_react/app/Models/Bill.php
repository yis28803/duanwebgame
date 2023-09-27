<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill'; // Tên của bảng trong cơ sở dữ liệu
    protected $primaryKey = 'id'; // Khóa chính của bảng

    // Các trường có thể được gán mass-assignment
    protected $fillable = [
        'iduser',
        'bill_sanpham',
        'bill_user',
        'bill_email',
        'ngaydathang',
        'total',
        'bill_status',
        'receive_name',
        'receive_address',
        'receive_tel',
    ];

    // Loại bỏ timestamps mặc định (created_at và updated_at)
    public $timestamps = false;
}
