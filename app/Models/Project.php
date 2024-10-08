<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_ar', 'content_en', 'content_ar', 'link', 'image', 'department_id'];

    public function departament()
    {
        return $this->belongsTo(Department::class);
    }

    public function getNameAttribute()
    {
        $lang = session()->get('locale') ?? 'en';
        return $this->{'name_' . $lang};
    }
    public function getcontentAttribute()
    {
        $lang = session()->get('locale') ?? 'en';
        return $this->{'content_' . $lang};
    }
    protected $guarded = [];
}