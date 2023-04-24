<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'brand',
    'size',
    'price',
    'type',
    'img',
  ];

  protected function getUpdatedAtAttribute($value) {
    return date('d/m/Y H:i:s', strtotime($value));
  }
}
