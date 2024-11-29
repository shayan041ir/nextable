<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id', 'stext', 'enstext', 'text', 'link', 'enlink',
        'icon', 'pic', 'video', 'StartDate', 'StartTime',
        'EndDate', 'EndTime', 'Keyword', 'Desk', 'tf', 'deltf',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
