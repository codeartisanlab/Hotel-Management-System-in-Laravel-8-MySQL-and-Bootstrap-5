<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Roomtypeimage;
use Illuminate\Support\Facades\Storage;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=RoomType::all();
        return view('roomtype.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'detail'=>'required',
        ]);

        $data=new RoomType;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->detail=$request->detail;
        $data->save();

        foreach($request->file('imgs') as $img){
            $imgPath=$img->store('public/imgs');
            $imgData=new Roomtypeimage;
            $imgData->room_type_id=$data->id;
            $imgData->img_src=$imgPath;
            $imgData->img_alt=$request->title;
            $imgData->save();
        }

        return redirect('admin/roomtype/create')->with('success','Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=RoomType::find($id);
        return view('roomtype.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $data=RoomType::find($id);
        return view('roomtype.edit',['data'=>$data]);
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
        $data=RoomType::find($id);
        $data->title=$request->title;
        $data->price=$request->price;
        $data->detail=$request->detail;
        $data->save();

        if($request->hasFile('imgs')){
            foreach($request->file('imgs') as $img){
                $imgPath=$img->store('public/imgs');
                $imgData=new Roomtypeimage;
                $imgData->room_type_id=$data->id;
                $imgData->img_src=$imgPath;
                $imgData->img_alt=$request->title;
                $imgData->save();
            }
        }


        return redirect('admin/roomtype/'.$id.'/edit')->with('success','Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       RoomType::where('id',$id)->delete();
       return redirect('admin/roomtype')->with('success','Data has been deleted.');
    }

    public function destroy_image($img_id)
    {
        $data=Roomtypeimage::where('id',$img_id)->first();
        Storage::delete($data->img_src);

       Roomtypeimage::where('id',$img_id)->delete();
       return response()->json(['bool'=>true]);
    }
}
