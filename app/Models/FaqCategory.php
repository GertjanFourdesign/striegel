<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use App\Models\Faq;
use Illuminate\Database\Eloquent\Builder;

class FaqCategory extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    protected $fillable = [
        'name',
    ];

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    protected static function boot() {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('order', 'asc');
        });
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}
