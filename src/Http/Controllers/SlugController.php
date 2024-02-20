<?php
namespace wdd\slug\Http\controllers;
use App\Http\controllers\Controller;
use Illuminate\Support\Str;
class SlugController extends Controller{
public function index(){
$slug=Str::slug('web developer');
return view('wdd/slug::slug',compact('slug'));
}

}