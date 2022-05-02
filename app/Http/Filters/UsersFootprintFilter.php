<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;

class UsersFootprintFilter extends Filter
{
    /**
     * filters by the given string against name.
     *
     * @param  string|null  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function name(string $value = null): Builder
    {
        return $this->builder->where('name', 'like', "{$value}%");
    }

    /**
     * filters ... by the given .. for is_wanted.
     *
     * @param  string|null  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function wanted(int $value = 1): Builder
    {
        return $this->builder->where('is_wanted', $value);
    }

    /**
     * filters ... by the given string for keywords.
     *
     * @param  string|null  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    // public function keywords(string $value = null): Builder
    // {
    //     return $this->builder->where('tags', 'like', "{$value}%");
    // }

    /**
     * filter ... by the given category.
     *
     * @param  string|null  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    // public function category(string $value = null): Builder
    // {
    //     return $this->builder->where('category', $value);
    // }

    /**
     * sort ... by the given order and field.
     *
     * @param  array  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function sort(array $value = []): Builder
    {
        if (isset($value['by']) && ! Schema::hasColumn('users_footprints', $value['by'])) {
            return $this->builder;
        }

        return $this->builder->orderBy(
            $value['by'] ?? 'created_at', $value['order'] ?? 'desc'
        );
    }
}