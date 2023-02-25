<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Outbound;
use App\Models\JenisMbkm;
use App\Models\ProgramMbkm;
use Auth;

class OutboundController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_OUTBOUND');
    }

    public function profileMhs ()
    {
        $id_user = Auth::user()->id;
        $data = Outbound::where('user_id',$id_user)->first();
        $program_id = $data->program_id;
        if(!empty($program_id)){
            $program_id = ProgramMbkm::where('id',$program_id)->first();
            // dd($program_id);
            // $jenisSelect = JenisMbkm::where('id',);
        }
        $jenis = JenisMbkm::all();
        $program = ProgramMbkm::all();
        // dd($program_id->jenis->id);
        return view('outbound.profile',compact('data','jenis','program','program_id'));
    }

    public function submit(Request $request)
    {
        // dd($request);
        $nowTimeDate = Carbon::now();

        // dd($request->no_hp);$id_user = Auth::user()->id;
        $id_user = Auth::user()->id;
        // dd($id_user);
        $data = Outbound::where('user_id',$id_user)->first();
        // dd($data);

        // dd($request->program);
        // dd($data->user_id);
        
        $findData = Outbound::find($data->id);
        // dd($findData);
        $findData->user_id = Auth::user()->id;
        $findData->nim = $request->nim;
        $findData->no_hp = $request->no_hp;
        $findData->fak = $request->fak;
        $findData->prodi = $request->prod;
        $findData->program_id = $request->program;
        $findData->semester = $request->semester;
        $findData->updated_at = $nowTimeDate;
        // dd($findData);
        $findData->save();
        
        return redirect('/dashboard/outbound-profile');
    }
}
