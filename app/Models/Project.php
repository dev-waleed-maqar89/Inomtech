<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_ar', 'content_en', 'content_ar', 'link', 'image'];

    public function departament()
    {
        return $this->hasOneThrough(Department::class, DepartmentProject::class, 'project_id', 'id', 'id', 'department_id');
    }

    protected $guarded = [];
}