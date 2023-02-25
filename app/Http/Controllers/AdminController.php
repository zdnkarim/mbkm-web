<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Outbound;
use App\Models\Inbound;
use App\Models\UserRole;
use App\Models\Role;
use App\Models\JenisMbkm;
use App\Models\ProgramMbkm;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
    }

    public function dataOut()
    {
        $users = User::all();
        $data = Outbound::all();
        $dfirst = Outbound::first();
        // dd($dfirst);
        $role = UserRole::where('role_id',2)->get();
        return view('outbound.data',compact('data','users','role','dfirst'));
    }

    public function showDataOut($id)
    {
        $data = Outbound::where('id',$id)->first();
        // dd($data->users->email);
        $program_id = $data->program_id;
        if(!empty($program_id)){
            $program_id = ProgramMbkm::where('id',$program_id)->first();
            // dd($program_id);
            // $jenisSelect = JenisMbkm::where('id',);
        }
        $jenis = JenisMbkm::all();
        $program = ProgramMbkm::all();
        return view('outbound.show',compact('data','jenis','program','program_id'));
    }

    public function submitDataOut ($id, Request $request)
    {
        // dd($request);
        $nowTimeDate = Carbon::now();
        $findData = Outbound::find($id);
        // dd($findData);
        $findData->nim = $request->nim;
        $findData->no_hp = $request->no_hp;
        $findData->fak = $request->fak;
        $findData->prodi = $request->prod;
        $findData->semester = $request->semester;
        $findData->program_id = $request->program;
        $findData->updated_at = $nowTimeDate;
        // dd($data);
        $findData->save();
        return redirect('/dashboard/data-outbound/');
    }

    public function deleteDataOut($id)
    {
        $uid = Outbound::find($id)->user_id;
        User::find($uid)->delete();
        return redirect('/dashboard/data-outbound/');
    }

    public function dataIn()
    {
        $users = User::all();
        $data = Inbound::all();
        $dfirst = Inbound::first();
        $role = UserRole::where('role_id',3)->get();
        return view('inbound.data',compact('data','users','role','dfirst'));
    }

    public function showDataIn($id)
    {
        $data = Inbound::where('id',$id)->first();
        // $program_id = $data->program_id;
        // if(!empty($program_id)){
        //     $program_id = ProgramMbkm::where('id',$program_id)->first();
        // }
        // $jenis = JenisMbkm::all();
        // $program = ProgramMbkm::all();
        return view('inbound.show',compact('data'));
    }
    
    public function submitDataIn($id, Request $request)
    {
        // dd($request);
        $nowTimeDate = Carbon::now();
        $findData = Inbound::find($id);
        // dd($findData);
        $findData->nim = $request->nim;
        $findData->no_hp = $request->no_hp;
        $findData->nim_asal = $request->nim_asal;
        $findData->univ = $request->univ_asal;
        $findData->fak = $request->fak_asal;
        $findData->prodi = $request->prod_asal;
        $findData->jenjang_pend = $request->jenj_pend;
        $findData->prodi_tuj = $request->prod_tuj;
        $findData->mk_ambil = $request->mk_ambil;
        $findData->updated_at = $nowTimeDate;
        // dd($data);
        $findData->save();
        return redirect('/dashboard/data-inbound/');
    }

    public function deleteDataIn($id)
    {
        $uid = Inbound::find($id)->user_id;
        User::find($uid)->delete();
        return redirect('/dashboard/data-inbound/');
    }

    public function jenisMbkm()
    {
        $data = JenisMbkm::all();
        $count = 1;
        return view('mbkm.jenis.data',compact('data','count'));
    }

    public function createJenis (Request $request)
    {
        $data = new JenisMbkm;
        $data->jenis = $request->jenis;
        $data->save();
        return redirect('/dashboard/mbkm-jenis');
    }

    public function showJenis($id)
    {
        $data = JenisMbkm::find($id);
        // dd($data);
        return view('mbkm.jenis.show',compact('data'));
    }

    public function updateJenis($id, Request $request)
    {
        // dd($request->jenis);
        $data = JenisMbkm::find($id);
        $data->jenis = $request->jenis;
        $data->save();
        return redirect('/dashboard/mbkm-jenis');
    }

    public function valDelJenis($id)
    {
        $data = JenisMbkm::find($id);
        return view('mbkm.jenis.delete',compact('data'));
    }

    public function deleteJenis($id)
    {
        // dd($request);
        JenisMbkm::find($id)->delete();
        return redirect('/dashboard/mbkm-jenis');
        
    }

    public function programMbkm()
    {
        $data = ProgramMbkm::all();
        $jenis = JenisMbkm::all();
        $count = 1;
        return view('mbkm.program.data',compact('data','count','jenis'));
    }

    public function createProgram (Request $request)
    {
        // dd($request);
        $data = new ProgramMbkm;
        $data->jenis_id = $request->jenis;
        $data->program = $request->program;
        $data->id_program = $request->id;
        $data->sks = $request->sks;
        $data->desc = $request->desc;
        $data->save();
        return redirect('/dashboard/mbkm-program');
    }

    public function showProgram($id)
    {
        $data = ProgramMbkm::find($id);
        $jenis = JenisMbkm::all();
        return view('mbkm.program.show',compact('data','jenis'));
    }

    public function updateProgram($id, Request $request)
    {
        // dd($request);
        $data = ProgramMbkm::find($id);
        $data->jenis_id = $request->jenis;
        $data->program = $request->program;
        $data->id_program = $request->id;
        $data->sks = $request->sks;
        $data->desc = $request->desc;
        $data->save();
        return redirect('/dashboard/mbkm-program');
    }

    public function valDelProgram($id)
    {
        $data = ProgramMbkm::find($id);
        return view('mbkm.program.delete',compact('data'));
    }

    public function deleteProgram($id)
    {
        ProgramMbkm::find($id)->delete();
        return redirect('/dashboard/mbkm-program');
    }
}
