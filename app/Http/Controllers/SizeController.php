<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::all();
        return view('admin.size.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sizes = explode(',', $request->size);
        $size = new Size();
        $size->size = json_encode($sizes);
        $size->save();
        return redirect()->back()->with('message', "Size Created Successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status(Request $request)
    {
        $size = Size::find($request->size_id);
        $size->status = $request->status;
        $size->save();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $size = Size::find($id);
        return view('admin.size.edit', compact('size'));
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
        $sizes = explode(',', $request->size);
        $size = Size::find($id);
        $size->size = $size->size = json_encode($sizes);
        $size->update();
        return redirect('/sizes')->with('message', "Size Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $delete = $size->delete();
        if ($delete) {
            return redirect()->back()->with('message', "Size Deleted Successfully");
        }
    }
}
