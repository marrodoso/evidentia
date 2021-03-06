<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    protected $table = "secretaries";

    public function comittee()
    {
        return $this->belongsTo('App\Comittee');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function default_lists()
    {
        return $this->hasMany('App\DefaultList')->orderByDesc('created_at');
    }
}
