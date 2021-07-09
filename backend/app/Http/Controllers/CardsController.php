<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Card;
use Validator;

use Auth;

class CardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //コンストラクタ：最初に必ず実行される処理

    public function add(Request $request){
        //Eloquent  モデル
        $books = new Card;
        $books->item_name = $request->item_name;
        $books->item_number = '1';
        $books->item_amount = '1000';
        $books->published = '2021-03-07 00:00:00';
        $books->save();
        return redirect('/');

    }
}
