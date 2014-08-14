<?php

class Comentario extends Eloquent
{
    protected $table      = 'mb_mnt_comments';
    protected $primaryKey = 'comments_id';
    protected $fillable   = array('comments_alias','comments_descrip','comments_fecha');
    protected $guarded    = array('comments_id');
    public    $timestamps = false;
    

    public static function comments() {
    $alias = Auth::user()->usrs_alias;
    return DB::select("
   select comments_alias alias, comments_descrip commentario, comments_fecha fecha, usrs_avatar avatar 
    from mb_mnt_comments cmts, users usrs
    where cmts.comments_alias= '$alias'
    and usrs.usrs_alias='$alias'
    union
    select cnts.contacts_alias_dest  alias, comments_descrip commentario, comments_fecha fecha , usrs_avatar avatar 
    from mb_mnt_comments cmts, mb_mnt_contacts cnts , users usrs
    where cmts.comments_alias = cnts.contacts_alias_dest 
    and cnts.contacts_alias_bloq=0
    and cnts.contacts_alias_seg=1
    and cnts.contacts_alias_orig='$alias'
    and usrs.usrs_alias='$alias'
    union
    select comments_alias alias, comments_descrip commentario, comments_fecha fecha , usrs_avatar avatar 
       from mb_mnt_comments cmts, users usrs
       where lower(cmts.comments_descrip)like'$alias'
       and usrs.usrs_alias='$alias'
    order by fecha desc"); 
   }

    public static function deleteComment($comment) {
    $alias = Auth::user()->usrs_alias;
     return DB::select("
    delete from mb_mnt_comments where
    comments_alias=?
    and
    comments_descrip = ?" , array($alias, $comment));
   }

   public static function hashtagSearched($hashtag) {
    return DB::select("
    select comments_alias alias, comments_descrip commentario, comments_fecha fecha 
   from mb_mnt_comments 
   where lower(comments_descrip)like lower('%$hashtag%')
    order by fecha desc");
   }
}

