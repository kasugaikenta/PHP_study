@extends('layouts.app')
@section('content')
<div class="panel-body">
<!-- バリデーションエラーの場合に表示 --> 
@include('common.errors')

  <!-- カード作成フォーム -->
  <form action="{{ url('/card/edit')}}" method="POST" class="form-horizontal">
  {{csrf_field()}} 
    <div class="form-group"> 
    <!--カード名-->
      <label for="card" class="col-sm-3 control-label">カード名</label> 
      <div class="col-sm-6"> 
        <input type="text" name="card_name" class="form-control" value="{{ old('card_name' ,$card->title) }}">
      </div>
    </div>
    <!--メモ-->
    <div class="form-group"> 
      <label for="card" class="col-sm-3 control-label">メモ</label> 
      <div class="col-sm-6"> 
        <textarea name="card_memo" rows="4" cols="80"　class = "form-control">{{$card->memo}}</textarea>
      </div>
      <input type="hidden" name="card_id" value="{{ old('card_id', $card->id) }}">
    </div>
    
    <div class="form-group"> 
    <!--リスト名-->
      <label for="card" class="col-sm-3 control-label">リスト名</label> 
      <div class="col-sm-6"> 
        <select name="list_name" class = "list_name_form">
          @foreach($listings as $item)
            <option value="{{$item->id}}"
             @if(
              old('list_name' ,$listing->id) == $item->id) selected
             @endif
            >
             {{$item->title}}</option>
          @endforeach
        </select>
      </div>
    </div>
    
    <div class = "form-group"> 
      <div class="col-sm-offset-3 col-sm-6"> 
        <button type="submit"class = "card-create-button">
        <i></i> 更新する </button> 
      </div>
    </div>
  </form>
</div> 
@endsection