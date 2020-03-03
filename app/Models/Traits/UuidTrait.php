<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{
    protected static function bootUsesUuid()
    {
        static::creating(function ($model) {
            if (! $model->getKey()) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}