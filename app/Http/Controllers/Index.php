<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AlbumsFormRequest;
use App\Models\Album;

class Index extends Controller
{

    public function index(Request $request)
    {
        $filter['artist'] = isset($request->artist) ? $request->artist : '';
        $filter['gender'] = isset($request->gender) ? $request->gender : '';
        
        $albums = new Album();

        if($filter['artist'] !== ''){
            $albums = $albums->where('artist', 'like', '%' . $request->artist . '%');
        }

        if($filter['gender'] !== ''){
            $albums = $albums->where('gender', 'like', $request->gender);
        }

        $albums = $albums->get();
        
        return view('index', compact('albums', 'filter'));
    }

    public function create()
    {
        return view('edit');
    }

    public function store(AlbumsFormRequest $request)
    {
        $album = new Album();
        $album->store($request);

        return redirect()->route('index');
    }

    public function edit($albumId)
    {
        $album = Album::find($albumId);

        return view('edit', compact('album'));
    }

    public function update(AlbumsFormRequest $request)
    {
        $album = Album::find($request->id);
        $album->store($request);

        return redirect()->route('index', [$album]);
    }

}
