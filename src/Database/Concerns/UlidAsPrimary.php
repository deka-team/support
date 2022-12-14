<?php

namespace Deka\Support\Database\Concerns;

use Ulid\Ulid;

trait UlidAsPrimary
{
    public static function bootUlidAsPrimary()
    {
        static::creating(function ($model) {
            if (! $model->id) {
                $model->id = (string) Ulid::generate();
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
