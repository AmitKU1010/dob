<?php
namespace App;
use App\Profile;
use App\Role;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /** 
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'email', 'password', 'role_id','phone_number','gender','pincode','name','address','dob','profile_image','qualification','department_name_user','branch','id_proof','working_days','working_time_in','working_time_out','account_number','ifsc_code','doj','priority'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
