<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model {

	//
	protected $dates = ['published_at'];
	
	protected $fillable = ['title','body','published_at'];


	public function setPublishedAtAttribute($date){
		$this->attributes['published_at'] = Carbon::parse($date)->subDay();
	}

	public function scopePublished($query){
		$query->where('published_at', '<=', Carbon::now());
	}

	public function scopeUnpublished($query){
		$query->where('published_at','>',Carbon::now());
	}

}
