<?php

class Template extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];



	public static function getTempName($id){

		$temp = Template::find($id);

		return $temp->name;
	}



	public static function getName(){

		$last_ref = DB::table('templates')->orderBy('id', 'desc')->pluck('name');

		if($last_ref != null){
			$new_ref = $last_ref + 1;
		} else {
			$new_ref = 1000;
		}


	}

}