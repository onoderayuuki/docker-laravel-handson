<?php

use Illuminate\Support\Facades\Route;

use App\Models\Card;
use Unsplash\HttpClient; 
use Illuminate\Http\Request; //ここ怪しい
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    $cards = Card::orderBy('addDate','asc')->paginate(2);
    //Cardモデルを渡して起動 ページ名で渡すモデルを制御すれば出しわけは簡単かも
    return view('cards_list',[
        'cards' => $cards
    ]);
});

//test
Route::get('/edittest/{cardID}', function ($cardID) {
    $card = Card::find($cardID);
    return view('edittest',['card'=>$card]);
});

Route::get('/edit/{cardID}', function ($cardID) {
    require '../vendor/autoload.php';
    Unsplash\HttpClient::init([
        'applicationId'  => 'WtXaQuUo6QB9xPxsoqwCBLIWm0S1ImqGtDzbluWxlNI',
        'secret'  => 'WRqMevmuTh_xPpy31SUsI-_-FCtFrkz_2WrHTd5kyVA',
        'callbackUrl'  => 'https://your-application.com/oauth/callback',
        'utmSource' => 'Moonlight'
    ]);
    
    // Load
    $photos = array();

    for ($i = 0; $i < 5; $i++) {
        $photo = Unsplash\Photo::random();
        $photo_array = array(
                'id' => $photo->id, 'thumb' => $photo->urls['thumb'], 'regular' => $photo->urls['regular']
            );
        $photos[] = $photo_array;
    }
    $photos_json = json_encode($photos);

        //UnsplashとCardのモデルを渡して起動したい
        $card = Card::find($cardID);
        return view('edit',['card'=>$card,'photos'=>$photos,'photos_json'=>$photos_json]);
    });

//追加
Route::post('/cards', 'App\Http\Controllers\CardsController@add'); 

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

// use App\Models\Book;
// use Illuminate\Http\Request; //ここ怪しい
// use App\Http\Controllers\BooksController;

// Route::get('/', function () {
//     $books = Book::orderBy('created_at','asc')->paginate(2);
//     return view('books',[
//         'books' => $books
//     ]);
// });
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

// //追加
// Route::post('/books', 'App\Http\Controllers\BooksController@add'); 

// //本を削除
// Route::delete('/book/{book}', function (Book $book) {
//     $book ->delete();
//     return redirect('/');
// });

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
