@extends('layouts.app')
@section('content')

<div class = "card-detail">
    <div class = title-area>
        <h4>タイトル</h4>
        <h1>{{$card->title}}</h1>
    </div>
    
    <div class = "memo-area">
        <h4>メモ</h4>
        <h2>{{$card->memo}}</h2>
    </div>
            
    <div class = "list-name-area">
        <h4>リスト名</h4>
        <h2>{{$listing->title}}</h2>
    </div>
</div>
<div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-6"> 
    <a href="{{ url('/cardsedit', $card->id)}}">
         <button type="submit" class="btn card-edit-button">
            <i></i> 編集する
         </button> 
    </a>
    </div>
</div>
<div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-6"> 
    <a onclick="return confirm('{{$card->title}}を削除して大丈夫ですか？')" href="{{ url('/cardsdelete', $card->id)}}">
         <button type="submit" class="btn card-delete-button">
            <i></i> 削除する
         </button> 
    </a>
    </div>
</div>
@endsection