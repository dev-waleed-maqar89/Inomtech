<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name_ar', 'name_en', 'description_ar', 'description_en', 'image'];

    public function projects()
    {

        return $this->hasMany(Project::class);
    }

    public function getSlugAttribute()
    {
        return str_replace(' ', '-', $this->name_en);
    }

    public function getNameAttribute()
    {
        $lang = session()->get('locale') ?? 'en';
        return $this->{'name_' . $lang};
    }

    public function getDescriptionAttribute()
    {
        $lang = session()->get('locale') ?? 'en';
        return $this->{'description_' . $lang};
    }
}