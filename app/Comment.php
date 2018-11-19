<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   use Presenters\CommentPresenter;
  public function commentable()
  {
      return $this->morphTo();
  }

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
