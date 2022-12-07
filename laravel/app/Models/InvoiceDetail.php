<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;

    protected $table='invoice_details';
    protected $primaryKey='id';
    protected $guarded=[];
 

    public function invoice(){
        return $this->belongsTo(Invoice::class,'InvoiceId','id');
    }
    public function products(){
        return $this->belongsTo(Product::class,'InvoiceId','id');
    }


}
