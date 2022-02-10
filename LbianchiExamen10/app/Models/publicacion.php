<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicacion extends Model
{
    protected $table = 'publicacions';
    protected $primaryKey = 'id';
    protected $fillable = ['publicationName','publicationExtract','publicationContent','publicationDate'];
}
