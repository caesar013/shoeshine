<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'transaction_id',
        'shoe_id',
        'service_id',
    ];

    public function shoe(){
        return $this->belongsTo(Shoe::class, 'shoe_id', 'id');
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    public function service(){
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
