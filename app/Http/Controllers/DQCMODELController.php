<?php

namespace App\Http\Controllers;

use DB;
use App\DQCMODEL;
use Illuminate\Http\Request;

class DQCMODELController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DQCMODEL::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'MODEL'=>'required|max:10|min:6',
        ]);

        $dqcmodel = DQCMODEL::create($request->all());

        return response()->json($dqcmodel, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DQCMODEL  $dQCMODEL
     * @return \Illuminate\Http\Response
     */
    public function show($dQCMODEL)
    {
        return DQCMODEL::find($dQCMODEL);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DQCMODEL  $dQCMODEL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dQCMODEL)
    {
        $request->validate([
            'MODEL'=>'required|max:10|min:6',
        ]);

        $dqcmodel = DQCMODEL::find($dQCMODEL);

        if ($dqcmodel) {
            $dqcmodel->update($request->all());

            return response()->json($dqcmodel, 200);
        }

        return response()->json(['message' => 'DQCMODEL nao foi encontrado.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DQCMODEL  $dQCMODEL
     * @return \Illuminate\Http\Response
     */
    public function destroy($dQCMODEL)
    {
        return DB::delete('delete from DQCMODEL where id = ?', [$dQCMODEL]);
    }
}
