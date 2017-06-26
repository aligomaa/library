<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function formstore($request)
{
	
$author=$request->input('author');

	$authors= new Author();
	$authors->aname=$author;

	$authors->save();
 }
}
