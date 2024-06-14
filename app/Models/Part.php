<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * The Part model represents a component of a car within the database
 * @property int $id
 * @property string $name
 * @property int $serialnumber
 * @property int $car_id
 * @property Car $car
 */

class Part extends Model
{
    protected $fillable = [
        'name',
        'serialnumber',
        'car_id',
    ];

    protected $guarded = [
        'id'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
