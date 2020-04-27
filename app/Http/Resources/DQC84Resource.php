<?php

namespace App\Http\Resources;

use App\DQCMODEL;
use Illuminate\Http\Resources\Json\JsonResource;

class DQC84Resource extends JsonResource
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
            'MODEL' => DQCMODEL::find($this->MODEL),
            'MODEL_ID' => $this->MODEL,
            'FAT_PART_NO' => $this->FAT_PART_NO,
            'TOTAL_LOCATION' => $this->TOTAL_LOCATION,
            'UPDATE_DT' => $this->UPDATE_DT,
            'CREATE_DT' => $this->CREATE_DT,
        ];
    }
}
