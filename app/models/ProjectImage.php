<?php

class ProjectImage extends Eloquent {

	protected $fillable = ['src', 'caption', 'alt'];
	public $timestamps = false;

}
