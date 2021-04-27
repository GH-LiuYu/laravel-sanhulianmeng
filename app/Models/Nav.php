<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    use HasFactory;
    protected $table = 'nav';
    protected $fillable = ['name','sort'];
    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d');//指定日期输出格式
    }
}
