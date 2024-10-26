<?php

namespace App\Models;

use App\Models\Forescast;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'locations';
    protected $primaryKey = 'id';
    protected $fillable = ['city', 'zipcode'];

    public function forecasts(): HasMany
    {
        return $this->hasMany(Forecast::class, 'location_id');
    }
}
