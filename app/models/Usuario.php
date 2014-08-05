<?php

class Usuario extends Eloquent
{
    protected $table      = 'mb_mnt_usrs';
    protected $primaryKey = 'usrs_alias';
    protected $fillable   = array('
    	usrs_email','usrs_alias', 'usrs_nombre','usrs_apellidos','usrs_telefono','usrs_direcion','usrs_biografia','usrs_pwd', 'usrs_avatar','usrs_fecha_ingreso','usrs_estado');
    protected $guarded    = array('usrs_id');
    public    $timestamps = false;
    
    	 public static function datosUsr() { 
    $alias = "@choco";
	return DB::select("
select usrs_email email, usrs_alias alias, usrs_nombre nombre,  usrs_apellidos apellido, usrs_telefono telefono, usrs_direccion direccion, usrs_biografia biografia, usrs_avatar avatar
from mb_mnt_usrs 
where usrs_alias= '$alias'"); }
    	
    }