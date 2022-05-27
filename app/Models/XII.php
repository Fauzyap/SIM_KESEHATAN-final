<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XII extends Model
{
    use HasFactory;
    protected $primaryKey="nis";
    protected $fillable=['nama', 'JK', 'rombel', 'rayon'];
    protected $table='_x_i_i';
}
