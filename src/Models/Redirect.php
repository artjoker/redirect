<?php

    namespace Artjoker\Redirect\Models;

    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Model;
    use Artjoker\Redirect\Traits\UuidTrait;

    class Redirect extends Model
    {
        use UuidTrait;

        protected $fillable = [
            'url_from',
            'url_to',
            'status_code',
            'is_active',
            'position',
        ];

        protected $dates = [
            'deleted_at',
        ];

        public function scopeOnlyActive(Builder $builder)
        {
            return $builder->where('is_active', true);
        }

        public function scopeOrderByPosition(Builder $builder)
        {
            return $builder->orderBy('position');
        }
    }
