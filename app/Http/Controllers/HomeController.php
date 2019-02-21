<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\HomeItem;

class HomeController extends Controller
{
    public function index()
    {
        $item = HomeItem::first();
        return view('index')
                    ->with('title', $item->title)
                    ->with('subtitle', $item->subtitle)
                    ->with('itemOneName', $item->itemOneName)
                    ->with('itemOneDescription', $item->itemOneDescription)
                    ->with('itemOnePrice', $item->itemOnePrice)
                    ->with('itemTwoName', $item->itemTwoName)
                    ->with('itemTwoDescription', $item->itemTwoDescription)
                    ->with('itemTwoPrice', $item->itemTwoPrice)
                    ->with('itemThreeName', $item->itemThreeName)
                    ->with('itemThreeDescription', $item->itemThreeDescription)
                    ->with('itemThreePrice', $item->itemThreePrice);
    }
}
