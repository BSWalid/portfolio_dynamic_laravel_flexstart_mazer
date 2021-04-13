<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function roles(){
        return $this->BelongsToMany(Role::class);
    }

    public function users(){
        return $this->BelongsToMany(User::class);
    }
}
