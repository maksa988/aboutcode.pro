<?php

namespace App\Models;

use Illuminate\Support\Str;

trait HasSlug
{
    /**
     * @return mixed|string
     */
    public function getRouteKeyName()
    {
        return $this->getSlugAttributeName();
    }

    /**
     * Boot the Slug trait
     *
     * @return void
     */
    public static function bootHasSlug()
    {
        static::created(function ($model) {
            $model->update([
                $model->getSlugAttributeName() => $model[$model->getTitleAttributeName()]
            ]);
        });
    }

    /**
     * @param $value
     */
    public function setSlugAttribute($value)
    {
        if (static::whereSlug($slug = Str::slug($value))->exists()) {
            $slug = "{$slug}-{$this->id}";
        }

        $this->attributes[$this->getSlugAttributeName()] = $slug;
    }

    /**
     * @return string
     */
    public function getSlugAttributeName()
    {
        return $this->slug_attribute ?? 'slug';
    }

    /**
     * @return string
     */
    public function getTitleAttributeName()
    {
        return $this->title_attribute ?? 'title';
    }
}