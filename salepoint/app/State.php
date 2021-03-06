<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'states';

    protected $fillable = ['name','code','abbreviation','country_id'];

    public function citys(){
        return $this->hasMany('App\City', 'state_id');

    }
    public function country(){
        return $this->belongsTo('App\Country','country_id');
    }

    public function partner(){
        return $this->hasMany('App\Partner','state_id');
    }
}


