<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countrys';

    protected $fillable = ['name','code','abbreviation'];



    public function states(){
        return $this->hasMany('App\State', 'country_id');
    }

    public function partner(){
        return $this->hasMany('App\Partner','country_id');
    }
}
