<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\User;
use App\Expert;
use App\Http\Requests\QuestionRequest;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        return view('admin.question.index',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $expert = Expert::all();
        return view('admin.question.add',compact('user','expert'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $question = Question::create($request->all());
        return redirect()->route('question.show',$question)->with('thongbao','Thêm thành công.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('admin.question.show',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $user = User::all();
        $expert = Expert::all();
        return view('admin.question.edit',compact('question','user','expert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $this->validate($request,[
            'question_name' => 'required|min:3',
            'question_user_id' => 'required'
        ],[
            'question_name.required' => 'Tên câu hỏi không được để trống.',
            'question_min' => 'Tên câu hỏi không được dưới 3 ký tự.',
            'question_user_id' => 'Người hỏi không được để trống'
        ]);
        $question->update($request->all());
        return redirect()->route('question.show',$question)->with('thongbao','Sửa thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        session()->flash('destroy_success');
        return redirect()->route('provider.index')->with('thongbao','Xóa thành công.');
    }
}
