<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'bulletins';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['church_id', 'description'];

  public function church() {
    return $this->belongsTo('App\Church');
  }
}
