<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DQC841 extends Model
{
    protected $primarykey = 'ID';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'DQC841';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['FAT_PART_NO', 'PARTS_NO', 'UNT_USG', 'DESCRIPTION', 'REF_DESIGNATOR'];

    /**
     * The name of the "created_at" column.
     *
     * @var string
     */
    const CREATED_AT = 'CREATE_DT';

    /**
     * The name of the "updated_at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'UPDATE_DT';
}
