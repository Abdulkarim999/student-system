<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $table = 'payment';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'paid_date', 'amount'];
    use HasFactory;
}
