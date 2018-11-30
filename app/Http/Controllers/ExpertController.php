<?php

namespace App\Http\Controllers;

use App\Expert;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultantexpertRequest;
use Illuminate\Support\Facades\Hash;
use App\TblParent;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expert = Expert::all();
        return view('admin.expert.index',compact('expert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = TblParent::all();
        return view('admin.expert.add',compact('parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpertRequest $request)
    {
        $expert = new Expert();
        $expert->fill($request->all());
        $expert->expert_level = 3;
        $expert->expert_password = Hash::make($expert->expert_password);
        // if($request->hasFile("expert_image"))
        // {
        //     $file = $request->file('expert_image');
        //     $duoi = $file->getClientOriginalExtension();
        //     if($duoi != 'jpg' && $duoi != 'JPG'  && $duoi != 'png' && $duoi != 'PNG' && $duoi != "jpeg" && $duoi != "JPEG")
        //     {
        //         return redirect()->route('expert.create')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
        //     }
        //     $name = $file->getClientOriginalName();
        //     $Hinh = str_random(4)."_". $name;
        //     while (file_exists("upload/expert".$Hinh)) {
        //         $Hinh = str_random(4)."_". $name;
        //     }
        //     $file->move("upload/expert",$Hinh);
        //     $expert->expert_image = $Hinh;
        // }
        // else {
        //     $expert->expert_image = "";
        // }
        $expert->save();
        return redirect()->route('expert.show',$expert)->with('thongbao','Thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expert  $consultant_expert
     * @return \Illuminate\Http\Response
     */
    public function show(Expert $expert)
    {
        return view('admin.expert.show',compact('expert'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expert  $consultant_expert
     * @return \Illuminate\Http\Response
     */
    public function edit(Expert $expert)
    {
        $parent = TblParent::all();
        return view('admin.expert.edit',compact('expert','parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expert  $consultant_expert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expert $expert)
    {
        $this->validate($request,[],[]);
        $expert->fill($request->all());
        $expert->expert_password = Hash::make($expert->expert_password);
        // if($request->hasFile("expert_image"))
        // {
        //     $file = $request->file('expert_image');
        //     $duoi = $file->getClientOriginalExtension();
        //     if($duoi != 'jpg' && $duoi != 'JPG'  && $duoi != 'png' && $duoi != 'PNG' && $duoi != "jpeg" && $duoi != "JPEG")
        //     {
        //         return redirect()->route('expert.create')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
        //     }
        //     $name = $file->getClientOriginalName();
        //     $Hinh = str_random(4)."_". $name;
        //     while (file_exists("upload/expert".$Hinh)) {
        //         $Hinh = str_random(4)."_". $name;
        //     }
        //     $file->move("upload/expert",$Hinh);
        //     $expert->expert_image = $Hinh;
        // }
        // else {
        //     $expert->expert_image = "";
        // }
        $expert->save();
        return redirect()->route('expert.show',$expert)->with('thongbao','Thêm thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expert  $consultant_expert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expert $expert)
    {
        $expert->delete();
        session()->flash('destroy_success');
        return redirect()->route('expert.index')->with('thongbao','Xóa thành công.');
    }
}
