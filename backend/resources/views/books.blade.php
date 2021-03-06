@extends('layouts.app')

@section('content')
    <div class="panel-body">
        {{-- エラー表示 --}}
        @include('common.errors')
        {{-- セッションから情報を取得 --}}
        名前:{{Auth::user()->name}} 


        {{-- 登録 --}}
        <form action="{{url('books')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="book" class="col-sm-3 control-label">Book</label>
                <div class="col-sm-6"><input type="text" name="item_name" id="book-name" class="form-control"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Save
                    </button>
                </div>
            </div>
        </form>

    {{-- リスト --}}
    @if(count($books)>0)
        <div class="panel panel-default">
            <div class="panel-heading">現在の本</div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>本一覧</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td class="table-text">
                                    <div>{{$book->item_name}}</div>
                                </td>
                                <td>
                                    <form action="{{ url('book/'.$book->id) }}" method="POST">
                                        {{ csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>削除
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @endif
</div>
    <div class="row">
            {{ $books->links() }}
    </div>
@endsection