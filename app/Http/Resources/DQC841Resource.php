<?php

namespace App\Http\Resources;

use App\DQC84;
use Illuminate\Http\Resources\Json\JsonResource;

class DQC841Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'ID' => $this->ID,
            'FAT_PART_NO' => DQC84::find($this->FAT_PART_NO),
            'PARTS_NO' => $this->PARTS_NO,
            'UNT_USG' => $this->UNT_USG,
            'DESCRIPTION' => $this->DESCRIPTION,
            'REF_DESIGNATOR' => $this->REF_DESIGNATOR,
            'UPDATE_DT' => $this->UPDATE_DT,
            'CREATE_DT' => $this->CREATE_DT,
        ];
    }
}
