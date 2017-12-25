<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 'admin';
    const MEMBER = 'member';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
