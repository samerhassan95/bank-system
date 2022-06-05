<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'amount',
    ];
    use HasFactory;



public function senderAccount()
{
    return $this->belongsTo(Account::class,'foreign_key','send_acc_id');
}

public function receiverAccount()
{
    return $this->belongsTo(Account::class,'foreign_key','received_acc_id');
}

public function transactionCurrency()
{
    return $this->hasOne(Transactions::class);
}

}