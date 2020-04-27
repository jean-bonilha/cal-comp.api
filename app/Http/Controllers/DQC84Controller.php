<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use App\DQC84;
use App\DQCMODEL;
use Illuminate\Http\Request;
use App\Http\Resources\DQC84Resource;
use App\Http\Resources\DQC84Collection;

class DQC84Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DQC84Collection(DQC84::all());
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
            'MODEL'=>'required|min:1|max:20',
            'FAT_PART_NO' => 'required|unique:DQC84|min:10|max:15',
            'TOTAL_LOCATION' => 'required|min:1|max:11',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!DQCMODEL::find($request->MODEL)) {
            return response()->json(['message' => 'DQCMODEL nao foi encontrado.'], 404);
        }

        $dqc84 = DQC84::create($request->all());

        return response()->json($dqc84, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DQC84  $dQC84
     * @return \Illuminate\Http\Response
     */
    public function show($dQC84)
    {
        $dqc84 = DQC84::find($dQC84);

        if (!$dqc84) {
            return response()->json(['message' => 'DQC84 nao foi encontrado.'], 404);
        }

        $data = new DQC84Resource(DQC84::find($dQC84));
        return response()->json($data, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DQC84  $dQC84
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dQC84)
    {
        $validator = Validator::make($request->all(), [
            'MODEL'=>'required|min:1|max:20',
            'FAT_PART_NO' => 'required|unique:DQC84|min:10|max:15',
            'TOTAL_LOCATION' => 'required|min:1|max:11',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!DQCMODEL::find($request->MODEL)) {
            return response()->json(['message' => 'DQCMODEL nao foi encontrado.'], 404);
        }

        if (DQC84::find($dQC84)) {

            DB::update(
                'update DQC84 set MODEL = ?, FAT_PART_NO = ?, TOTAL_LOCATION = ? where ID = ?',
                [
                    $request->MODEL,
                    $request->FAT_PART_NO,
                    $request->TOTAL_LOCATION,
                    $dQC84,
                ]
            );

            return response()->json(['message' => 'O DQC84 foi atualizado com sucesso.'], 200);
        }

        return response()->json(['message' => 'DQC84 nao foi encontrado.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DQC84  $dQC84
     * @return \Illuminate\Http\Response
     */
    public function destroy($dQC84)
    {
        $deleted = DB::delete('delete from DQC84 where id = ?', [$dQC84]);

        if ($deleted) {
            return response()->json(['message' => 'O DQC84 foi excluido com sucesso.'], 200);
        }

        return response()->json(['message' => 'DQC84 nao foi encontrado.'], 404);
    }
}
