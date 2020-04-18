<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DQC84 extends Model
{
    protected $primarykey = 'ID';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'DQC84';

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

    /**
     * Get the DQC84 of the DQCMODEL.
     */
    public function DQC841s()
    {
        return $this->hasMany('App\DQC841', 'DQC84', 'ID');
    }
}
