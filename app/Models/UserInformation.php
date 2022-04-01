<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperUserInformation
 */
class UserInformation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'birthday' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
