<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use App\Gallery;
use App\Partner;
use App\Testimony;
use Illuminate\Support\Facades\Artisan;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class LandingPageController extends Controller
{

    public function index()
    {  

        // dd(Artisan::call("storage:link"));

        return view('welcome', [
            'goals' => $this->getGoals(),
            'allnews' => $this->getNews(),
            'galleries' => $this->getGalleries(),
            'partners' => $this->getPartners(),
            'testimonies' => $this->getTestimonies()
        ]);
    }


    protected function getGoals()
    {
        return Goal::all();
    }

    protected function getNews()
    {
        $category = Category::where('name', 'news')->first();
        return Post::where('category_id', $category->id)->paginate(4);
    }

    protected function getGalleries()
    {
        return Gallery::limit(3)->get();
    }

    protected function getPartners()
    {
        return Partner::all();
    }
    protected function getTestimonies()
    {
        return Testimony::all();
    }
}
