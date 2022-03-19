<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";

    public function store($formData)
    {
        $this->catalog = $formData->catalog;
        $this->artist = $formData->artist;
        $this->name = $formData->name;
        $this->year = $formData->year;
        $this->gender = $formData->gender;

        $this->save();
    }
}
