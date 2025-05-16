<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    /**
     * All attributes are mass assignable.
     */
    protected $guarded = [];

    /**
     * Relationships
     */
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
