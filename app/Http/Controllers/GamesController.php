<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Category;

class GamesController extends Controller
{   
    /**
     * [index function will display view for content list]
     * @return [type] [description]
     */
    public function index(){
        $games = Game::latest()->with('category')->paginate(6);
        $cats = Category::orderBy('name', 'ASC')->with('games')->get();
        $title = "Game Warrior";
        return view('game/index', compact('games', 'title', 'cats'));
    }

    // public function show($id){
    //     $game = Game::find($id);
    //     $title = "Detailed View";
    //     return view('game/show', compact('game', 'title'));
    // }

    /**
     * [show function displays detailed information for selected game]
     * @param  Game   $game [object]
     * @return [type]       [description]
     */
    public function show(Game $game){
        // dd($slug);
        $cat = Game::find($game->category_id);
        $cats = Category::orderBy('name','ASC')->with('games')->get();
        $title = "Detailed View";
        return view('game/show', compact('game', 'cats', 'cat', 'title'));
    }

    /**
     * [category function displays game list belonging to selected category]
     * @param  [string] $name [description]
     * @return [type]       [description]
     */
    public function category($name){
        $cat = Category::where('name', $name)->first();
        $games = $cat->games()->get();
        $title = 'Category List';
        $cats = Category::orderBy('name', 'ASC')->with('games')->get();
        return view('game/category', compact('games', 'title', 'cats', 'cat'));
    }

    /**
     * [contact function to view the contact page]
     * @return [type] [description]
     */
    public function contact(){
        $title = "Contact Us";
        return view('game/contact', compact('title'));
    }

    /**
     * [about function to view the about page]
     * @return [type] [description]
     */
    public function about(){
        $title = "About Us";
        return view('game/about', compact('title'));
    }

    // public function category($name){​​
    //     dd($name);
    //     $cat = Category::where('name', $name)->first();
    //     $games = $cat->games()->get();
    //     $title = 'Categories';
    //     $cats = Category::orderBy('name', 'ASC')->with('games')->get();
    //     return view('game/show', compact('games', 'title', 'cats', 'cat'));
    // }​​
}
