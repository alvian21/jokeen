<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view("admin.about-us.index", ['about' => $about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.about-us.create");
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
            'description' => "required",
            'image' => 'image|mimes:jpeg,png,jpg|max:1024|required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        } else {
            $about = new About();
            $about->title = $request->get('title');

            $about->description = $request->get('description');
            if ($request->hasFile('image')) {
                $img = $request->file('image');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                Storage::putFileAs("public/images/about", $img, $filename);
            }
            $about->image = $filename;
            $about->save();
            return redirect()->route('about-us.index');
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
        $about = About::find($id);
        Storage::delete("public/images/about/" . $about->image);
        $about->delete();

        if ($about->delete()) {
            echo "success";
        }
    }
}
