<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Faker\Provider\Uuid;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
  /**
   * Instantiate a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $pagename = 'Feature';
    $features = Feature::all();

    return view('features', ['pagename' => $pagename, 'features' => $features]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $pagename = "Add the Feature";
    
    return view('feature_add', ['pagename' => $pagename]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    
    Feature::create([
      'id' => (string) Str::uuid(), // update this field
      'imdb_id' => request('imdb_id'),
      'youtube_link' => request('youtube_link'),
      'poster_img' => request('poster_img'),
      'bg_img' => request('bg_img'),
      'title' => request('title'),
      'year' => request('year'),
      'rating' => request('rating'),
      'length' => request('length'),
      'genre' => request('genre'),
      'short_desc' => request('short_desc'),
      'entry_user_id' => request('entry_user_id'),
      'entry_date' => '', // update this field
      'update_date' => '', // update this field
    ]);
  
    return redirect('/features');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $pagename = 'Feature_Edit';
    
    $feature = Feature::find($id);

    return view('feature_edit', ['pagename' => $pagename, 'feature' => $feature]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    Feature::find($id)
      ->update([
        'imdb_id' => request('imdb_id'),
        'youtube_link' => request('youtube_link'),
        'poster_img' => request('poster_img'),
        'bg_img' => request('bg_img'),
        'title' => request('title'),
        'year' => request('year'),
        'rating' => request('rating'),
        'length' => request('length'),
        'genre' => request('genre'),
        'short_desc' => request('short_desc'),
        'entry_user_id' => request('entry_user_id'),
      ]);
    
    return redirect('/features');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Feature::find($id)->delete();
    
    return redirect('/features');
  }
}
