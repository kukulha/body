<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Instructor;
use App\Lesson;
use App\Type;
use App\Promotion;
use App\Post;
use App\Category;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function index()
    {
    	$instructors = Instructor::orderBy('name', 'ASC')->paginate();
    	$lunes = Lesson::orderBy('time', 'ASC')->where('day', 'Lunes')->paginate();
    	$martes = Lesson::orderBy('time', 'ASC')->where('day', 'Martes')->paginate();
    	$miercoles = Lesson::orderBy('time', 'ASC')->where('day', 'Miercoles')->paginate();
    	$jueves = Lesson::orderBy('time', 'ASC')->where('day', 'Jueves')->paginate();
    	$viernes = Lesson::orderBy('time', 'ASC')->where('day', 'Viernes')->paginate();
    	$sabado = Lesson::orderBy('time', 'ASC')->where('day', 'Sabado')->paginate();
    	$promotions = Promotion::orderBy('end', 'ASC')->paginate();
    	$today = Carbon::now();
    	$posts = Post::orderBy('id', 'DESC')->paginate(3);
    	return view('index', compact('instructors', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'promotions', 'today', 'posts'));
    }

    public function blog(Request $request)
    {
        $body = $request->get('body');

    	$posts = Post::orderBy('id', 'DESC')
            ->body($body)
            ->paginate(6);
    	$categories = Category::orderBy('name', 'ASC')->get();
    	return view('web.blog', compact('posts', 'categories'));
    }

    public function category(Request $request , $slug)
    {
        $body = $request->get('body');
        $categories = Category::orderBy('name', 'ASC')->get();
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')
            ->body($body)
            ->paginate(6);
        
        return view('web.blog', compact('posts', 'categories'));
    }

    public function post($slug)
    {
    	$post = Post::where('slug', $slug)->first();
    	$related= Post::where('category_id', '=', $post->category->id)
            ->where('id', '!=', $post->id)
            ->paginate(3);
    	
    	return view('web.post', compact('post', 'related'));
    }

}
