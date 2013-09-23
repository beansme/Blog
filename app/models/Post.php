<?php

class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	protected $table = 'posts';
	// public $timestamps =  false;
	protected $softDelete = true;
	protected $fillable = ['title','description','body','author_id','views','pictrue','tags'];

	public function comments() {
		return $this->hasMany('Comment');
	}

	public function author() {
		return $this->belongsTo('User','author_id');
	}
}
