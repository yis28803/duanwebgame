<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'sanpham';
    protected $primaryKey = 'id'; // Đặt lại khóa chính (primary key) nếu cần thiết
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'sale', 'img', 'mota', 'luotxem', 'iddm', 'idtl'];

    // Định nghĩa quan hệ với bảng 'theloai'
    public function theloai()
    {
        return $this->belongsTo(TheLoai::class, 'idtl', 'id');
    }


    public static function sumPricesByQuantities($products,$productsInSesstion)
    {
        $total = 0;
        foreach($products as $product)
        {
            $total = $total + ($product->sale * $productsInSesstion[$product->id]);
        }
        return $total;  
    }
}
