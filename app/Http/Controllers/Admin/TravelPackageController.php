<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TravelPackage::all();


        return view('pages.admin.travel_packages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.travel_packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['slug'] =  Str::slug($request->name);

        $data = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'location' => 'required',
            'about' => 'required',
            'featured_event' => 'required',
            'language' => 'required',
            'foods' => 'required',
            'departure_date' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'price' => 'required',
        ]);

        $result = TravelPackage::create($data);


        return redirect()->route('travel-package.index');
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
        $data = TravelPackage::findOrFail($id);

        return view('pages.admin.travel_packages.update', compact('data'));
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
        $request['slug'] =  Str::slug($request->name);

        $data = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'location' => 'required',
            'about' => 'required',
            'featured_event' => 'required',
            'language' => 'required',
            'foods' => 'required',
            'departure_date' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'price' => 'required',
        ]);

        $item = TravelPackage::findOrFail($id);

        $item->update($data);

        return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = TravelPackage::findOrFail($id);
        $data->delete();

        return redirect()->route('travel-package.index');
    }
}
