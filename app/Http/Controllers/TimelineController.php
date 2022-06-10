<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        $dataTimeline = Timeline::all();
        return view('timeline', compact(['dataTimeline']));
    }

    public function index2()
    {
        $dataTimeline = Timeline::all();
        return view('list-timeline', compact(['dataTimeline']));
    }

    public function create()
    {
        return view('create-timeline');
    }

    public function insert(Request $request)
    {
        Timeline::create($request->all());
        return redirect('timeline');
    }

    public function destroy($id)
    {
        $data = Timeline::find($id);
        $data->delete();
        return redirect('/list-timeline')->with('success', 
        'Data telah dihapus.');

    }
}
