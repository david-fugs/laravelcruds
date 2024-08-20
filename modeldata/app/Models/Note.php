<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table =  "notes";

//defiinicion de los campos
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'done'
    ];
    //campos protegidos
    // protected $guarded = [

    // ];

//que vengan bien formateadas
    // protected $casts = [
    //     'deadline' => 'date',
    // ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at'

    ];
}
