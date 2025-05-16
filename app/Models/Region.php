<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    /**
     * All attributes are mass assignable.
     */
    protected $guarded = [];

    /**
     * Relationships
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }
}
