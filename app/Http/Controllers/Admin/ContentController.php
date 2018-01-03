<?php

namespace App\Http\Controllers\Admin;

use ShawnSandy\Backstory\App\Controllers\StoryController;
use ShawnSandy\Backstory\App\Story;

class ContentController extends StoryController
{

	public function index()
	{

		$content = Story::type('post')->get();

		return view("admin.content", compact('content'));

	}

	public function create()
	{
		return view("admin.create-content");
	}

	public function edit($id)
	{

		$model = Story::with(['author', 'categories'])->where("id", $id)->first();

		return view('admin.edit-content', compact('model'));

	}



}
