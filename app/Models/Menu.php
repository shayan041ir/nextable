<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'stext', 'enstext', 'text', 'link', 'enlink', 'icon', 'tf', 'pic', 'Keyword', 'Desk', 'StartDate', 'StartTime', 'EndDate', 'EndTime',
    ];
}
