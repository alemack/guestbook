<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Record extends Model
{
    use HasFactory;
    // soft delete
    use SoftDeletes;

    // явно связали модель с таблицей
    protected $table = 'records';
    // разрешили добавлять и изменять данные в бд
    protected $guarded = [];
}
