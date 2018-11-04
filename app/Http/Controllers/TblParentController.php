<?php

namespace App\Http\Controllers;

use App\TblParent;
use Illuminate\Http\Request;

class TblParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent = TblParent::all();
        return view('admin.parent.index',compact('parent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parent.add');
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
            'parent_name' => 'required|unique:tblparent,parent_id|min:3|max:30'
        ],[
            'parent_name.required' => 'Parent không được để trống.',
            'parent_name.unique' => 'Parent đã tồn tại.',
            'parent_name.min' => 'Parent không ít hơn 3 kí tự.',
            'parent_name.max' => 'Parent không lớn hơn 30 ký tự'
        ]);
        $parent = TblParent::create($request->all());
        return redirect()->route('parent.show',$parent)->with('thongbao','Thêm thành công.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(TblParent $parent)
    {
        return view('admin.parent.show',compact('parent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(TblParent $parent)
    {
        return view('admin.parent.edit',compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TblParent $parent)
    {
        $this->validate($request,[
            'parent_name' => 'required|min:3|max:30'
        ],[
            'parent_name.required' => 'Parent không được để trống.',
            'parent_name.min' => 'Parent không ít hơn 3 kí tự.',
            'parent_name.max' => 'Parent không lớn hơn 30 ký tự'
        ]);
        $parent->update($request->all());
        return redirect()->route('parent.show',$parent)->with('thongbao','Sửa thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(TblParent $parent)
    {
        $parent->delete();
        session()->flash('destroy_success');
        return redirect()->route('parent.index')->with('thongbao','Xóa thành công.');
    }
}
