<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return "TEST";
// });

use App\Models\Book;
use Illuminate\Http\Request; //ここ怪しい
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    $books = Book::orderBy('created_at','asc')->paginate(2);
    return view('books',[
        'books' => $books
    ]);
});
// //本を追加
// Route::post('/books', function (Request $request) {
//     //バリデーション
//     $validator = Validator::make($request->all(),[
//         'item_name' => 'required|min:3|max:255',
//     ]);
//     //バリデーションエラー
//     if($validator->fails()){
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }
//     //Eloquent  モデル
//     $books = new Book;
//     $books->item_name = $request->item_name;
//     $books->item_number = '1';
//     $books->item_amount = '1000';
//     $books->published = '2021-03-07 00:00:00';
//     $books->save();
//     return redirect('/');
// });

//追加
Route::post('/books', 'App\Http\Controllers\BooksController@add'); 

//本を削除
Route::delete('/book/{book}', function (Book $book) {
    $book ->delete();
    return redirect('/');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
