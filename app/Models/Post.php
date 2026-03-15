<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\PostSaving;


class Post extends Model
{
    use HasFactory;

    protected $dispatchesEvents = [
        'saving' => PostSaving::class,
    ];

    public function getDate() {
        $month = date('m', strtotime($this->created_at));
        $year = date('Y', strtotime($this->created_at));
        
        $months = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maart',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Augustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'December'
        ];
        
        $month = $months[$month];

        return $month . ' ' . $year;
    }
}
