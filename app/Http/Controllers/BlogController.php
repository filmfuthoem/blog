<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller {

	//
	public function index(){
		$blogs = Blog::get();
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
		return redirect('blog.index');
	}

}
