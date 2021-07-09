@extends('layouts.app')

@section('content')
    <div class="outer">
      <main class="wrapper-main">
        <!--並び替えボタン-->
        {{-- <div class="sort-area">
          <ul class="sort-list flex-parent">
            <li class="sort-item"><a href="./edit_list.php?type=<?=$type?>&order=desc"> ▼ addDate</a></li>
            <li class="sort-item"><a href="./edit_list.php?type=<?=$type?>&order=asc"> △ addDate</a></li>
            <!-- <li class="sort-item"><a href="#">▼ favoritDate</a></li> -->
          </ul>
        </div> --}}
        <!--end 並び替えボタン-->
        <!--商品リスト-->
        <div class="cards_list">
            <a id="plus-area" href="edit.php?id=0">＋</a>
            @foreach($cards as $card)
              <div class="cardContainer">
                <a href="{{ url('edit/'.$card->cardID) }}"><img src="{{ $card->imageBase64 }}" width="200" /></a>
                {{-- <a href="#'" class="favoritMoon">{{ $card->favorit }}</a> --}}
              </div>
            @endforeach
        </div>
        <!-- end 商品リスト-->
        <!-- ページャー -->
        {{-- <div>
        <ul class="pager clearfix">
          <li class="pager-item"><a href="#">1</a></li>
          <li class="pager-item"><a href="#">2</a></li>
        </ul>
      </div> --}}
        <!-- end ページャー-->
      </main>
    </div>
    @endsection
    {{-- <script src="http://code.jquery.com/jquery-3.0.0.js"></script> --}}
    {{-- <script src="js/jquery.bxslider.min.js"></script> --}}
  