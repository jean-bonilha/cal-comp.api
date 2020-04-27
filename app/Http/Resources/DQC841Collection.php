<?php

namespace App\Http\Resources;

use App\DQC84;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DQC841Collection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function ($item) {
                return [
                    'ID' => $item->ID,
                    'FAT_PART_NO' => DQC84::find($item->FAT_PART_NO)['FAT_PART_NO'],
                    'PARTS_NO' => $item->PARTS_NO,
                    'UNT_USG' => $item->UNT_USG,
                    'DESCRIPTION' => $item->DESCRIPTION,
                    'REF_DESIGNATOR' => $item->REF_DESIGNATOR,
                    'UPDATE_DT' => $item->UPDATE_DT,
                    'CREATE_DT' => $item->CREATE_DT,
                ];
            }),
        ];
    }
}
