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
        <input type="text" name="card_memo" class="form-control" value="{{ old('card_memo') }}">
      </div>
    </div>
    
    <div class = "form-group">
      <label for="listing"></label>
      <input type="hidden" name="id" value="{{ old('id', $listing->id) }}">
    </div>
    
    <div class="form-group"> 
      <div class="col-sm-offset-3 col-sm-6"> 
        <button type="submit" class="btn btn-default">
        <i class="glyphicon glyphicon-plus"></i> 作成 </button> 
      </div>
    </div>
  </form>
</div> 
@endsection