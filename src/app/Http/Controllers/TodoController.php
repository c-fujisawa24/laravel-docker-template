<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();
        return view('todo.index', ['todos' => $todos]);
    }
    public function create()
    {
        // dd('新規作成画面のルート実行！');
        return view('todo.create');
    }
    public function store(Request $request)
    // メソッドインジェクション
    {
        $content = $request->input('content');
        // dd($content);
        $todo = new Todo();
        // Todoクラスのインスタンス化
        $todo->content = $content;
        // カラム名のプロパティに保存したい値を代入
        $todo->save();
        // -save関数でINSERT文を実行

        return redirect()->route('todo.index');
    }
}
