<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DQC84 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'DQCMODEL';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['FAT_PART_NO', 'MODEL', 'TOTAL_LOCATION'];

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
