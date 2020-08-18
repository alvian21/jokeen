<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use App\Portofolio;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.portofolio.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.portofolio.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'title' => 'required',
            'category' => "required",
            'description' => "required",
            'image' => 'image|mimes:jpeg,png,jpg|max:1024|required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        } else {
            $portfolio = new Portofolio();
            $portfolio->title = $request->get('title');
            if ($request->get('category') == "3D-MODEL") {
                $filter = "filter-3dModel";
            } elseif ($request->get('category') == "PROTOTYPE") {
                $filter = "filter-protoype";
            } else {
                $filter = "filter-3dPrint";
            }
            $portfolio->filter = $filter;
            $portfolio->category = $request->get('category');
            $portfolio->description = $request->get('description');
            if ($request->hasFile('image')) {
                $img = $request->file('image');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                Image::make($img)->save(public_path('images/' . $filename));
            }
            $portfolio->image = $filename;
            $portfolio->save();
            return redirect()->route('portofolio.index');
        }
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
