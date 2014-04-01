<?php

class TagsController extends BaseController{


public function GetAllTags()
{
$tags=Tag::all();
return $tags;

}

public function GetSomeTags($tagName)
{
	$tags=Tag::where('name', 'LIKE', '%'.$tagName.'%')->get();
	return $tags;
}


public function CheckTag($tagName)
{
	$exist=Tag::where('name',$tagName)->count();
	
	if($exist)
		return json_encode(true);
	else 
		return json_encode(false);

}

public function CreateTag()
{

$tag=new Tag;
$tag->name=Input::get('name');
$tag->descriere=Input::get('descriere');
$tag->save();

}

public function CreateTagForm()
{
return View::make('tag_create');


}


}

