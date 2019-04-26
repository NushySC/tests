<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Hero;
use DB;
class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::orderBy('name', 'ASC')->get();
        return view('hero.index', compact('heroes'));
    }
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();
        if (!$hero) {
            abort(404, 'Hero not found');
        }
        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }
    public function send(Request $request)
    {
        $data = [
            'subject' => $request->subject,
            'description' => $request->description
        ];
        DB::table('emergencies')->insert([$data]);
        return redirect('/hero');
    }
}