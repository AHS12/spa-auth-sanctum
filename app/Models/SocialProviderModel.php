<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SocialProviderModel extends Model
{
    use HasFactory;
    protected $table = "social_provider";
    protected $fillable = [
        "provider",
        "provider_id",
        "user_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
