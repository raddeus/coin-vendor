<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MachineItem extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'count',
    ];

    /**
     * Get the machine this item is in
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
}
