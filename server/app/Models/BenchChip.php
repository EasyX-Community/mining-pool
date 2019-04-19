<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $vendor_id
 * @property string $chip
 * @property string $suffix
 */
class BenchChip extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bench_suffixes';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'vendor_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['chip', 'suffix'];

}
