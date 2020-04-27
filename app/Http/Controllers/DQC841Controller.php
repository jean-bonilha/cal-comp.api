<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use App\DQC84;
use App\DQC841;
use Illuminate\Http\Request;
use App\Http\Resources\DQC841Resource;
use App\Http\Resources\DQC841Collection;

class DQC841Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DQC841Collection(DQC841::all());
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
            'FAT_PART_NO' => 'required|min:1|max:20',
            'PARTS_NO' => 'required|min:10|max:20',
            'UNT_USG' => 'required|min:1|max:11',
            'DESCRIPTION' => 'min:2',
            'REF_DESIGNATOR' => 'min:2',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!DQC84::find($request->FAT_PART_NO)) {
            return response()->json(['message' => 'DQC84 nao foi encontrado.'], 404);
        }

        $dqc841 = DQC841::create($request->all());

        return response()->json($dqc841, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DQC841  $dQC841
     * @return \Illuminate\Http\Response
     */
    public function show($dQC841)
    {
        $dqc841 = DQC841::find($dQC841);

        if (!$dqc841) {
            return response()->json(['message' => 'DQC841 nao foi encontrado.'], 404);
        }

        $data = new DQC841Resource(DQC841::find($dQC841));
        return response()->json($data, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DQC841  $dQC841
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dQC841)
    {
        $validator = Validator::make($request->all(), [
            'FAT_PART_NO' => 'required|min:1|max:20',
            'PARTS_NO' => 'required|min:10|max:20',
            'UNT_USG' => 'required|min:1|max:11',
            'DESCRIPTION' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!DQC84::find($request->FAT_PART_NO)) {
            return response()->json(['message' => 'DQC84 nao foi encontrado.'], 404);
        }

        if (DQC841::find($dQC841)) {

            $dataUpdate = [
                $request->FAT_PART_NO,
                $request->PARTS_NO,
                $request->UNT_USG,
                $request->DESCRIPTION,
                $request->REF_DESIGNATOR,
            ];

            $sql = 'update DQC841 set FAT_PART_NO = ?, PARTS_NO = ?, UNT_USG = ?, DESCRIPTION = ?, REF_DESIGNATOR = ?';

            array_push($dataUpdate, $dQC841);

            $sql .= ' where ID = ?';

            DB::update(
                $sql,
                $dataUpdate,
            );

            return response()->json(['message' => 'O DQC841 foi atualizado com sucesso.'], 200);
        }

        return response()->json(['message' => 'DQC841 nao foi encontrado.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DQC841  $dQC841
     * @return \Illuminate\Http\Response
     */
    public function destroy($dQC841)
    {
        $deleted = DB::delete('delete from DQC841 where id = ?', [$dQC841]);

        if ($deleted) {
            return response()->json(['message' => 'O DQC841 foi excluido com sucesso.'], 200);
        }

        return response()->json(['message' => 'DQC841 nao foi encontrado.'], 404);
    }
}
