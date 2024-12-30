<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    // Navigation principal
    public function jobListings() {
        return $this->hasMany(JobListing::class);
    }
}
