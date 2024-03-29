<?php


    namespace Artjoker\Redirect\Traits;

    use Illuminate\Support\Str;

    trait UuidTrait
    {
        protected static function boot(): void
        {
            parent::boot();

            static::creating(function($model) {
                $model->{$model->getKeyName()} = (string)Str::uuid();
            });
        }

        public function getIncrementing(): bool
        {
            return false;
        }

        public function getKeyType(): string
        {
            return 'string';
        }
    }
