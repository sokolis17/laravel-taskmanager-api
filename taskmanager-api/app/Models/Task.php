<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'project_id','title','description','status','priority','due_date'
    ];

    public function project(){
       return $this->belongsTo(Project::class);
    }
    protected function casts(): array
{
    return [
        'due_date' => 'date',
    ];
}

}
