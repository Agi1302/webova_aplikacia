<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * The Car model represents a vehicle in the database
 * @property int $id
 * @property string $name
 * @property int $registration_number
 * @property boolean $is_registered
 * @property Collection<Part> $parts
 * @property string image_path
 */
class Car extends Model
{
    protected $fillable = [
        'name',
        'registration_number',
        'is_registered',
        'image_path',
    ];

    protected $guarded = [
        'id'
    ];

    public function parts()
    {
        return $this->hasMany(Part::class);
    }
}
