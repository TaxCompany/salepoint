<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\SoftDeletes;


class Uom extends Model implements AuthenticatableContract
{

    use Authenticatable;//, CanResetPassword;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'uoms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    public function product(){
        return $this->belongsTo('App\Product');
    }
    //Scope for search

    /*
     * This function search Users by Name
     * @query query that you create in index
     * @name is the string name that you search
     * */

    public function umo(){
        return $this->hasMany('App\Product', 'uom_id');
    }

    public static function filterAndPaginate($name)
    {
        return Uom::name($name)
            ->orderBy('name', 'ASC')
            ->paginate();

    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where("name", "LIKE", "%$name%");
        }

    }
}
