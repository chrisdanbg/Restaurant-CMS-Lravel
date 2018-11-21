<?php

namespace App\Http\Controllers;

use App\HomeItem;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin/index');
    }


    public function getSettings()
    {
        $item = HomeItem::first();

        return view ('admin/homepage')
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
    
    public function updateSiteName(Request $request)
    {
        $title = $request->title;
        $subtitle = $request->subtitle;
        
        $homeItem = HomeItem::first();

        $homeItem->title = $title;
        $homeItem->subtitle = $subtitle;

        $homeItem->save();

        return redirect()->back();
    }

    public function productOneUpdate(Request $request)
    {
        $name = $request->itemOneName;
        $description = $request->itemOneDescription;
        $price = $request->itemOnePrice;

        $homeItem = HomeItem::first();
        $homeItem->itemOneName = $name;
        $homeItem->itemOneDescription = $description;
        $homeItem->itemOnePrice = $price;

        $homeItem->save();
        
        return redirect()->back();
    }

    public function productTwoUpdate(Request $request)
    {
        $homeItem = HomeItem::first();
        $homeItem->itemTwoName = $request->itemТwoName;
        $homeItem->itemTwoDescription = $request->itemTwoDescription;
        $homeItem->itemTwoPrice = $request->itemТwoPrice;

        $homeItem->save();
        
        return redirect()->back();
    }

    public function productThreeUpdate(Request $request)
    {
        $homeItem = HomeItem::first();
        $homeItem->itemThreeName = $request->itemThreeName;
        $homeItem->itemThreeDescription = $request->itemThreeDescription;
        $homeItem->itemThreePrice = $request->itemThreePrice;

        $homeItem->save();
        
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
