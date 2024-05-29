<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderDetailModel extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table="tblorderdetail";
    public function belongtoOrder()
    {
        return $this->belongsTo(OderModel::class,'oid','oid');
    }
    public function belongtoProduct()
    {
        return $this->belongsTo(ProductModel::class,'pid','odid');
    }
}
