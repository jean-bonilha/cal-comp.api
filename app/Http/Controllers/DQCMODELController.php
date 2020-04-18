<?php

namespace App\Http\Controllers;

use DB;
use Validator;
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
        $validator = Validator::make($request->all(), [
            'MODEL'=>'required|unique:DQCMODEL|max:10|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

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
        $dqcmodel = DQCMODEL::find($dQCMODEL);

        if (!$dqcmodel) {
            return response()->json(['message' => 'DQCMODEL nao foi encontrado.'], 404);
        }

        return response()->json($dqcmodel);
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
        $validator = Validator::make($request->all(), [
            'MODEL'=>'required|unique:DQCMODEL|max:10|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (DQCMODEL::find($dQCMODEL)) {

            DB::update(
                'update DQCMODEL set MODEL = ? where ID = ?',
                [$request->MODEL, $dQCMODEL]
            );

            return response()->json(['message' => 'O DQCMODEL foi atualizado com sucesso.'], 200);
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
        $deleted = DB::delete('delete from DQCMODEL where id = ?', [$dQCMODEL]);

        if ($deleted) {
            return response()->json(['message' => 'O DQCMODEL foi excluido com sucesso.'], 200);
        }

        return response()->json(['message' => 'DQCMODEL nao foi encontrado.'], 404);
    }
}
