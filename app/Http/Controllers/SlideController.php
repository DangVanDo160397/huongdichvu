<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        return view('admin.slide.index',compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'slide_name' => 'required|unique:tblslide,slide_name|min:3',
        ],[
            'slide_name.required' => 'Tiêu đề không được để trống.',
            'slide_name.unique' => 'Tiêu đề đã tồn tại.',
            'slide_name.min' => 'Tiêu đề ko dưới 3 ký tự.'
        ]);
        $slide = new Slide();
        $slide->fill($request->all());
        if($request->hasFile("slide_image"))
        {
            $file = $request->file('slide_image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != "jpeg" )
            {
                return redirect()->route('slide.create')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_". $name;
            while (file_exists("upload/slide".$Hinh)) {
                $Hinh = str_random(4)."_". $name;
            }
            $file->move("upload/slide",$Hinh);
            $slide->slide_image = $Hinh;
        }
        else {
            $slide->slide_image = "";
        }
        $slide->save();
        return redirect()->route('slide.show',$slide)->with('thongbao','Thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        return view('admin.slide.show',compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('admin.slide.edit',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        $this->validate($request,[
            'slide_name' => 'required|min:3',
        ],[
            'slide_name.required' => 'Tiêu đề không được để trống.',
            'slide_name.min' => 'Tiêu đề ko dưới 3 ký tự.'
        ]);
        $slide->fill($request->all());
        if($request->hasFile("slide_image"))
        {
            $file = $request->file('slide_image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != "jpeg" )
            {
                return redirect()->route('slide.create')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_". $name;
            while (file_exists("upload/slide".$Hinh)) {
                $Hinh = str_random(4)."_". $name;
            }
            $file->move("upload/slide",$Hinh);
            $slide->slide_image = $Hinh;
        }
        else {
            $slide->slide_image = "";
        }
        $slide->save();
        return redirect()->route('slide.show',$slide)->with('thongbao','Thêm thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        session()->flash('destroy_success');
        return redirect()->route('slide.index')->with('thongbao','Xóa thành công.');
    }
}
