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

        return $this->hasManyThrough(Project::class, DepartmentProject::class, 'department_id', 'id', 'id', 'project_id');
    }

    public function getSlugAttribute()
    {
        return str_replace(' ', '-', $this->name_en);
    }
}