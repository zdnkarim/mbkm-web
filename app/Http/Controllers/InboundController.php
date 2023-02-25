<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Inbound;
use App\Models\ProgramMbkm;
use App\Models\JenisMbkm;
use Carbon\Carbon;

class InboundController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_INBOUND');
    }

    public function profileMhs()
    {
        // dd( Auth::user()->id );
        $id_user = Auth::user()->id;
        $data = Inbound::where('user_id',$id_user)->first();
        // dd($data->prodi_tuj);
        // $program_id = $data->program_id;
        // if(!empty($program_id)){
        //     $program_id = ProgramMbkm::where('id',$program_id)->first();
        //     // dd($program_id);
        //     // $jenisSelect = JenisMbkm::where('id',);
        // }
        $jenis = JenisMbkm::all();
        // dd($id_user);
        // dd($data->no_hp);
        return view('inbound.profile',compact('data'));
    }

    public function submit(Request $request)
    {
        $nowTimeDate = Carbon::now();

        // dd($request->no_hp);$id_user = Auth::user()->id;
        $id_user = Auth::user()->id;
        // dd($id_user);
        $data = Inbound::where('user_id',$id_user)->first();
        // dd($data);
        
        $findData = Inbound::find($data->id);
        // dd($findData);
        $findData->user_id = Auth::user()->id;
        $findData->nim = $request->nim;
        $findData->no_hp = $request->no_hp;
        $findData->nim_asal = $request->nim_asal;
        $findData->univ = $request->univ_asal;
        $findData->fak = $request->fak_asal;
        $findData->prodi = $request->prod_asal;
        $findData->semester = $request->semester;
        $findData->jenjang_pend = $request->jenj_pend;
        $findData->prodi_tuj = $request->prod_tuj;
        $findData->mk_ambil = $request->mk_ambil;
        $findData->updated_at = $nowTimeDate;
        // dd($data);
        $findData->save();
        
        return redirect('/dashboard/inbound-profile');
    }
}
