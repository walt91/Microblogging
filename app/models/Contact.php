<?php

class Contact extends Eloquent
{
    protected $table      = 'mb_mnt_contacts';
    protected $primaryKey = 'contacts_alias_dest';
    protected $fillable   = array('contacts_alias_orig','contacts_alias_dest','contacts_alias_seg','contacts_alias_bloq');
    public    $timestamps = false;


    public static function unfollowUser($aliasDest) { 
    $aliasDest1=$aliasDest;
    $aliasOrig =  Auth::user()->usrs_alias;
	return DB::select("update mb_mnt_contacts set contacts_alias_seg=0
    where contacts_alias_orig='$aliasOrig' and contacts_alias_dest='$aliasDest1'");
	 }

	 public static function blockadeUser($aliasDest) { 
    $aliasDest1=$aliasDest;
    $aliasOrig =  Auth::user()->usrs_alias;
	return DB::select("update mb_mnt_contacts set contacts_alias_bloq=1
    where contacts_alias_orig='$aliasOrig' and contacts_alias_dest='$aliasDest1'");
	 }
}
