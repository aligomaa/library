<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    
public function formstore($request)
{
	
$section=$request->input('section');

	$sections= new Sections();
	$sections->sname=$section;

	$sections->save();
 
 }
}
