<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceInDetail extends Model
{
    use HasFactory;

    protected $table='invoice_in_details';
    protected $primaryKey='id';
    protected $guarded=[];
  
}
