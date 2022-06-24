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
        // dd($request);
        for ($i=0; $i < count($request->judul); $i++) { 
            if(!is_null($request->judul[$i]) && !is_null($request->tgl_awal[$i]) && !is_null($request->tgl_akhir[$i])) {
                Timeline::create([
                    'judul' => $request->judul[$i],
                    'tgl_awal' => $request->tgl_awal[$i],
                    'tgl_akhir' => $request->tgl_akhir[$i],
                ]);
            }
        }
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
