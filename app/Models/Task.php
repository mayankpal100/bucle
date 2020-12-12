<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'end_date_task',
    ];
    
    public function Users()
    {
        return $this->belongsToMany(User::class,'usertasks','task_id','user_id');
    }
}
