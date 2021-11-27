<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function profileImage() {
        return $this->image ? asset("storage/{$this->image}") : asset("storage/profile/ujLSPxUEqb6qN5R1SSbJt7ec79EAN65CtpaDDNzT.jpg");
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }
}
