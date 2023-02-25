<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisMbkm;
use App\Models\ProgramMbkm;

class MbkmController extends Controller
{

    public function getProgramOutbound(Request $request)
    {
        $data['program'] = ProgramMbkm::where('jenis_id',$request->jenis_id)->where('desc','Outbound')->get(["program","id"]);
        // dd($data);
        return response()->json($data);
    }

    public function getProgramInbound(Request $request)
    {
        $data['program'] = ProgramMbkm::where('jenis_id',$request->jenis_id)->where('desc','Inbound')->get(["program","id"]);
        // dd($data);
        return response()->json($data);
    }
}
