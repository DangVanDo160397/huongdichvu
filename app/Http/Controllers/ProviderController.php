<?php

namespace App\Http\Controllers;

use App\Provider;
use App\Providers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\ProviderRequest;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provider = Provider::all();
        return view('admin.provider.index',compact('provider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.provider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderRequest $request)
    {
        $provider = Provider::create($request->all());
        return redirect()->route('provider.show',$provider)->with('thongbao','Thêm thành công.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        return view('admin.provider.show',compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        return view('admin.provider.edit',compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        $this->validate($request,[
            'provider_name' => 'required|min:3|max:30',
            'provider_address' => 'required|min:3',
            'provider_phone' => 'required|min:3'
        ],[
            'provider_name.required' => 'Tên NCC không được để trống.',
            'provider_name.min' => 'Tên NCC không ít hơn 3 kí tự.',
            'provider_name.max' => 'Tên NCC không lớn hơn 30 ký tự',
            'provider_address.required' => 'Địa chỉ không được để trống.',
            'provider_address.min' => 'Địa chỉ không ít hơn 3 kí tự.',
            'provider_phone.required' => 'Số điện thoại không được để trống.',
            'provider_phone.min' => 'Số điện thoại không ít hơn 3 kí tự.',
        ]);
        $provider->update($request->all());
        return redirect()->route('provider.show',$provider)->with('thongbao','Sửa thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();
        session()->flash('destroy_success');
        return redirect()->route('provider.index')->with('thongbao','Xóa thành công.');
    }
}
