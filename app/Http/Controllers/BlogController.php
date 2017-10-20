<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;

use Request;
/*use App\Http\Requests\BlogRequest;*/

class BlogController extends Controller {

	//
	public function index(){
		$blogs = Blog::published()->get();
		return view('blogs.index',compact('blogs'));
	}

	public function show($id){
		$blog = Blog::find($id);
		if(empty($blog))
			abort(404);
		return view('blogs.show',compact('blog'));
	}

	public function about(){
		return view('blogs.about');
	}

	public function create(){
		return view('blogs.create');
	}

	public function store(){
		$input = Request::all();
		Blog::create($input);
		return redirect('blogs');
	}

}
