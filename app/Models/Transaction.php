<?php

// app/Models/Transaction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $primaryKey = 'transaction_id';

    protected $fillable = ['amount', 'date', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
