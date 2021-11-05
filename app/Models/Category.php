<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;
  protected $guarded = ['id'];

  public function post()
  {
    return $this->hasMany(Post::class);
  }

  //  ! Overrides the search default value
  public function getRouteKeyName()
  {
    return 'slug';
  }
}
