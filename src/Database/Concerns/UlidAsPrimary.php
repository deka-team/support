<?php

namespace Deka\Support\Database\Concerns;

use Illuminate\Support\Str;

trait UlidAsPrimary
{
    public static function bootUlidAsPrimary()
    {
        static::creating(function ($model) {
            if (! $model->id) {
                $model->id = (string) Str::ulid()->toBase58();
            }
        });
    }

    /**
     * @return string
     */
    public function getKeyName()
    {
        return 'id';
    }

    /**
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }

    /**
     * @return false
     */
    public function getIncrementing()
    {
        return false;
    }
}
