<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Game;
use App\Category;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * [index function to show admin index page]
     * @return [type] [description]
     */
    public function index(){
        return view('admin/dashboard');
    }

    /**
     * [gamerecord to display list of records]
     * @return [type] [description]
     */
    public function gamerecord()
    {
        $games = Game::orderBy('title')->get();
        return view('admin/gamerecords/admingames', compact('games'));
    }

    /**
     * [edit function to edit a selected record]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function edit($id)
    {
        $games = Game::find($id);
        $cats = Category::with('games')->get();
        return view('admin/gamerecords/editgame', compact('games', 'cats'));
    }

    /**
     * [create function to create new records]
     * @return [type] [description]
     */
    public function create()
    {
        $games = Game::orderBy('title')->get();
        $cats = Category::with('games')->get();
        return view('admin/gamerecords/creategame', compact('games', 'cats'));
    }

    /**
     * [store function to save new records]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $request['slug'] = str::slug($request->title, '-');

        $valid = $request->validate([
            'title' => 'bail|required|string|max:255',
            'slug' => 'nullable',
            'developer' => 'bail|required|string|max:255',
            'latest_version' => 'bail|required|string|max:255',
            'status' => 'bail|required|string',
            'summary' => 'bail|required|string',
            'description' => 'bail|required|string',
            'image' => 'nullable|image',
            'price' => 'bail|required|integer',
            'category_id' => 'bail|required|integer'
        ]);

        if($request->file('image')){
            $title = $request->file('image')->getClientOriginalName();

            $img_name = str::slug(now(),'-').'_'.$title;

            $request->file('image')->storeAs('/public/images', $img_name);

            $valid['image'] = $img_name;
        }
        $game = Game::create($valid);

        if ($game) {
            session()->flash('success', 'New game added to the records.');
        }
        else {
            session()->flash('error', 'Unable to add new record.');
        }
        return redirect('/admin/gamerecords');
    }

    /**
     * [update function to save rexords after editing a selected record]
     * @param  Request $request [description]
     * @param  [type]  $id      [description]
     * @return [type]           [description]
     */
    public function update(Request $request, $id)
    {
        $request['slug'] = str::slug($request->title, '-');
        //dd($request);
        $valid = $request->validate([
           'title' => 'bail|required|string|max:255',
           'slug' => 'nullable',
           'developer' => 'bail|required|string|max:255',
           'latest_version' => 'bail|required|string|max:255',
           'status' => 'bail|required|string',
           'summary' => 'bail|required|string',
           'description' => 'bail|required|string',
           'image' => 'nullable|image',
           'price' => 'bail|required|integer',
           'category_id' => 'bail|required|integer'
        ]);

        //dd($valid);

        if($request->file('image')){
          $original_name = $request->file('image')->getClientOriginalName();
          $img_name = Str::slug(now(), '-') . '-' . $original_name;
          $request->file('image')->storeAs('public/images', $img_name);

          $valid['image'] = $img_name;
        }

        //$games = Game::find($valid['category_id']);
        $games = Game::find($id);
        //dd($valid);
        if($games->update($valid)){
            session()->flash('success', 'The category was successfully updated');
        }
        else{
            session()->flash('error', 'The category was not successfully updated');
        }
        return redirect('/admin/gamerecords');
    }

    /**
     * [destroy function to delete an existing record]
     * @param  Request $request [description]
     * @param  [type]  $id      [description]
     * @return [type]           [description]
     */
    public function destroy(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'bail|required|integer'
        ]);

        $game = Game::find($valid['id']);

        if($game->delete() ) {
            session()->flash('success', 'The record was successfully deleted');
        } else {
            session()->flash('error', 'There was a problem deleting the record. Retry...');
        }
        
        return redirect()->back();
    }
}
