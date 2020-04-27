<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class GeneralReportExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('DQC841')
            ->join('DQC84', 'DQC841.FAT_PART_NO', '=', 'DQC84.ID')
            ->join('DQCMODEL', 'DQC84.MODEL', '=', 'DQCMODEL.ID')
            ->select(
                'DQCMODEL.MODEL',
                'DQC84.FAT_PART_NO',
                'DQC84.TOTAL_LOCATION',
                'DQC841.PARTS_NO',
                'DQC841.UNT_USG',
                'DQC841.DESCRIPTION',
                'DQC841.REF_DESIGNATOR'
            )->get();
    }
}
