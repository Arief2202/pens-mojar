<?php

namespace App\Http\Controllers;

use App\Models\ApprovalPengadaan;
use App\Models\Pengadaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApprovalPengadaanController extends Controller
{
    public function answer(Request $request)
    {
        if ($request->answer != "Approve") {
            $request->validate([
                'note' => 'required'
            ]);
        }

        $answer = $request->answer == "Approve";
        $status = $request->answer == "Approve" ? 1 : 2;

        $check = ApprovalPengadaan::where('user_id', Auth::id())->where('pengadaan_id', $request->pengadaan_id)->first();

        if($check) {
            $approval = $check;
        } else {
            $approval = New ApprovalPengadaan($request->except(['_token', 'answer']));
        }

        $approval->answer = $answer;
        $approval->note = $request->note;
        $approval->save();
        
        $pengadaan = Pengadaan::findOrFail($request->pengadaan_id);
        $pengadaan->status = $status;
        $pengadaan->save();

        return redirect('/riwayat');
    }
}
