<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Name\Relative;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded=[];

    public function categories(){
        return $this->belongsTo(related: Category::class,foreignKey:'categoryid',ownerKey:'id');
    }
    public function productImages(){
        return $this->hasMany(Image::class,'productid','id');
    }
    public function productDetails(){
        return $this->hasMany(ProductDetail::class,'productid','id');
    }
    public function invoiceDetails(){
        return $this->hasMany(InvoiceDetail::class,'ProductId','id');
    }
    public function invoiceInDetails(){
        return $this->hasMany(InvoiceInDetail::class,'ProductId','id');
    }
  
}
