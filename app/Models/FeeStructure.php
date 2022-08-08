<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'admission_fee', 'total_fee_by_user', 'monthly_fee', 'admission_date', 'issue_fee_date', 'due_fee_date', 'status', 'created_at', 'updated_at'];
    public const Status = [
        'Paid' => 'Paid',
        'Unpaid' => 'Unpaid',
    ];
    public function getStatusColorAttribute()
    {
        return [
            'Paid' => 'green',
            'Unpaid' => 'red',
        ][$this->status] ?? 'cool-gray';
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
