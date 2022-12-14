<?php

namespace Deka\Support\Database\Concerns;

use Illuminate\Support\Facades\Schema;
use Ulid\Ulid;

trait HasUlid
{
    public static function bootHasUlid()
    {
        static::creating(function ($model) {
            if (Schema::hasColumn($model->getTable(), 'ulid')) {
                if (! $model->ulid) {
                    $model->ulid = (string) Ulid::generate();
                }
            }
        });
    }
}
