<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DQCMODEL extends Model
{
    protected $primarykey = 'ID';

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
    protected $fillable = ['MODEL'];

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
