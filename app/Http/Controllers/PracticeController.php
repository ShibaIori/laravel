<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function building()
    {
        return '建物です';
    }

    public function room($room)
    {
        return '部屋番号は'. $room. 'です';
    }
}
