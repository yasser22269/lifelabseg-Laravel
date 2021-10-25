<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pcr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PcrsRequest;
use Illuminate\Support\Facades\DB;

class PcrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pcrs = Pcr::paginate(PAGINATION_COUNT);
        return view('Admin.pcrs.index', compact('pcrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.pcrs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PcrsRequest $request)
    {
      //  return $request;
       try {
            DB::beginTransaction();
            Pcr::create($request->except('_token'));
                DB::commit();
                return redirect()->route('PCR.index')->with(['success' => 'تم ألاضافة بنجاح']);
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('PCR.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($id)
    {

        $Pcr = Pcr::find($id);
        if (!$Pcr)
        return redirect()->route('PCR.index')->with(['error' => 'هذا PCr غير موجود ']);
        return view('Admin.pcrs.edit', compact('Pcr'));
    }


    public function update(PcrsRequest $request,$id)
    {
        //return $request;
        try {

            DB::beginTransaction();
            $Pcr = Pcr::find($id);
            if (!$Pcr)
            return redirect()->route('PCR.index')->with(['error' => 'هذا PCr غير موجود ']);
    

           $Pcr->update($request->all());
            DB::commit();
            return redirect()->route('PCR.index')->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('PCR.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
    public function view($id)
    {
        $Pcr = Pcr::find($id);
        if (!$Pcr)
        return redirect()->route('PCR.index')->with(['error' => 'هذا PCr غير موجود ']);

           return view('Admin.pcrs.view', compact('Pcr'));
    }
    

    public function destroy($id)
    {
        $Pcr = Pcr::find($id);
        if (!$Pcr)
            return redirect()->route('PCR.index')->with(['error' => 'هذا PCr غير موجود ']);
        $Pcr->delete();
        return redirect()->route('PCR.index')->with(['success' => 'تم الحذف بنجاح']);
    }
}
