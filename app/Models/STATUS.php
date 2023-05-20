<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class STATUS extends Model
{
    use HasFactory;
    protected $table = 'STATUS';
    protected $guarded = ['*'];

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'status', 'id');
    }
}
