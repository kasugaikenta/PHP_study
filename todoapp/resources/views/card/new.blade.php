@extends('layouts.app')
@section('content')
<div class="panel-body">
<!-- バリデーションエラーの場合に表示 --> 
@include('common.errors')

  <!-- カード作成フォーム -->
  <form action="{{ url('/card/new')}}" method="POST" class="form-horizontal">
  {{csrf_field()}} 
    <div class="form-group"> 
    <!--カード名-->
      <label for="card" class="col-sm-3 control-label">カード名</label> 
      <div class="col-sm-6"> 
        <input type="text" name="card_name" class="form-control" value="{{ old('card_name') }}">
      </div>
    </div>
    <!--メモ-->
    <div class="form-group"> 
      <label for="card" class="col-sm-3 control-label">メモ</label> 
      <div class="col-sm-6"> 
        <textarea name="card_memo" rows="4" cols="40" class = "form-control" value = "{{ old('card_memo') }}"></textarea>
      </div>
      <input type="hidden" name="id" value="{{ old('id', $listing->id) }}">
    </div>
    
    <div class = "form-group"> 
      <div class="col-sm-offset-3 col-sm-6"> 
        <button type="submit"class = "card-create-button">
        <i></i> 作成する </button> 
      </div>
    </div>
  </form>
</div> 
@endsection