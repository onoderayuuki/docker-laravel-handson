<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Book;
use Validator;

use Auth;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //コンストラクタ：最初に必ず実行される処理
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request){
        //バリデーション
        $validator = Validator::make($request->all(),[
            'item_name' => 'required|min:3|max:255',
        ]);
        //バリデーションエラー
        if($validator->fails()){
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //Eloquent  モデル
        $books = new Book;
        $books->item_name = $request->item_name;
        $books->item_number = '1';
        $books->item_amount = '1000';
        $books->published = '2021-03-07 00:00:00';
        $books->save();
        return redirect('/');

    }
}
