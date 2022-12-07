<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceIn extends Model
{
    use HasFactory;

    protected $table='invoice_in';
    protected $primaryKey='id';
    protected $guarded=[];
  
}
