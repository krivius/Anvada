<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Document extends Model
{
    protected $guarded = []; // YOLO

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($document) {
            $document->{$document->getKeyName()} = (string) Str::uuid();
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
