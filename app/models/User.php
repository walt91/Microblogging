<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $hidden = array('password', 'remember_token');
	protected $table      = 'users';
    protected $primaryKey = 'usrs_alias';
    protected $fillable   = array('
    	email','usrs_alias', 'usrs_nombre','usrs_apellidos','usrs_telefono','usrs_direccion','usrs_biografia','password', 'usrs_avatar','usrs_fecha_ingreso','usrs_estado');
    protected $guarded    = array('usrs_id');
    public    $timestamps = false;
    
    public static function datosUsr() { 
    $alias =  Auth::user()->usrs_alias;
	return DB::select("
	select email email, usrs_alias alias, usrs_nombre nombre,  usrs_apellidos apellido, usrs_telefono telefono, usrs_direccion direccion, usrs_biografia biografia, usrs_avatar avatar
	from users
	where usrs_alias= '$alias'");
	 }

public function getAuthIdentifier()
{
    return $this->getKey();
}

/**
 * Get the password for the user.
 *
 * @return string
 */
public function getAuthPassword()
{
    return $this->password;
}

/**
 * Get the e-mail address where password reminders are sent.
 *
 * @return string
 */
public function getReminderEmail()
{
    return $this->email;
}
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	

}
