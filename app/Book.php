<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Book extends Model
{
public function formstore($request)
{
	
$name=$request->input('name');

$price=$request->input('price');

$section=$request->input('section');
$author=$request->input('author');

$sectionid= DB::table('sections')->select('id')->where('sname',  $section)->get();
$authorid= DB::table('authors')->select('id')->where('aname',  $author)->get();

$image=$request->file('image');
$filename=$image->getClientOriginalName();

      



	$books= new Book();
	$books->name=$name;
	$books->price=$price;
	$books->section_id=$section_id;
	$books->author_id=$section_id;
	$books->image=$filename;
	$books->save();
 
 }
}

