<?php

namespace App\Http\Resources;

use App\DQCMODEL;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DQC84Collection extends ResourceCollection
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
                    'MODEL' => DQCMODEL::find($item->MODEL)['MODEL'],
                    'FAT_PART_NO' => $item->FAT_PART_NO,
                    'TOTAL_LOCATION' => $item->TOTAL_LOCATION,
                    'UPDATE_DT' => $item->UPDATE_DT,
                    'CREATE_DT' => $item->CREATE_DT,
                ];
            }),
        ];
    }
}
