<?php

namespace App\Models\Conference;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected function getName(): Attribute
    {
        return Attribute::make(
            get: fn () => __($this->name, ParticipantType::where('name')->get()->toArray(), app()->getLocale())
        )->withoutObjectCaching();
    }
}
