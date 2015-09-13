<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;


class Church extends Model implements BillableContract
{
    use Billable;

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'churches';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'address', 'bio'];

    public function congregation()
    {
        return $this->belongsToMany('App\User');
    }

    public function bulletins()
    {
      return $this->hasMany('App\Bulletin');
    }

    public function events()
    {
      return $this->hasMany('App\Event');
    }
}
