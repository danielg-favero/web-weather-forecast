<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'forecasts';
    protected $primaryKey = 'id';
    protected $fillable = ['date', 'temperature', 'description', 'wind_speed', 'wind_degree', 'wind_direction', 'humidity', 'cloudcover', 'location_id'];
}
