{"filter":false,"title":"register.blade.php","tooltip":"/todoapp/resources/views/auth/register.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":77,"column":0},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","<div class=\"container\">","    <div class=\"row\">","        <div class=\"col-md-8 col-md-offset-2\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">Register</div>","","                <div class=\"panel-body\">","                    <form class=\"form-horizontal\" method=\"POST\" action=\"{{ route('register') }}\">","                        {{ csrf_field() }}","","                        <div class=\"form-group{{ $errors->has('name') ? ' has-error' : '' }}\">","                            <label for=\"name\" class=\"col-md-4 control-label\">Name</label>","","                            <div class=\"col-md-6\">","                                <input id=\"name\" type=\"text\" class=\"form-control\" name=\"name\" value=\"{{ old('name') }}\" required autofocus>","","                                @if ($errors->has('name'))","                                    <span class=\"help-block\">","                                        <strong>{{ $errors->first('name') }}</strong>","                                    </span>","                                @endif","                            </div>","                        </div>","","                        <div class=\"form-group{{ $errors->has('email') ? ' has-error' : '' }}\">","                            <label for=\"email\" class=\"col-md-4 control-label\">E-Mail Address</label>","","                            <div class=\"col-md-6\">","                                <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" value=\"{{ old('email') }}\" required>","","                                @if ($errors->has('email'))","                                    <span class=\"help-block\">","                                        <strong>{{ $errors->first('email') }}</strong>","                                    </span>","                                @endif","                            </div>","                        </div>","","                        <div class=\"form-group{{ $errors->has('password') ? ' has-error' : '' }}\">","                            <label for=\"password\" class=\"col-md-4 control-label\">Password</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" required>","","                                @if ($errors->has('password'))","                                    <span class=\"help-block\">","                                        <strong>{{ $errors->first('password') }}</strong>","                                    </span>","                                @endif","                            </div>","                        </div>","","                        <div class=\"form-group\">","                            <label for=\"password-confirm\" class=\"col-md-4 control-label\">Confirm Password</label>","","                            <div class=\"col-md-6\">","                                <input id=\"password-confirm\" type=\"password\" class=\"form-control\" name=\"password_confirmation\" required>","                            </div>","                        </div>","","                        <div class=\"form-group\">","                            <div class=\"col-md-6 col-md-offset-4\">","                                <button type=\"submit\" class=\"btn btn-primary\">","                                    Register","                                </button>","                            </div>","                        </div>","                    </form>","                </div>","            </div>","        </div>","    </div>","</div>","@endsection",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":51,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"sinupPage\">","  <div class=\"titleArea\">","    <h1>アカウントを新規作成</h1>","    <div class=\"m-3\">or</div>","      <p class=\"acountPage_link\"><a href=\"{{ route('login') }}\">アカウントにサインイン</a></p>","    </div>","    <div class=\"container\">","      <form class=\"mt-5, signupForm\" id=\"new_user\" action=\"{{ route('register') }}\" accept-charset=\"UTF-8\" method=\"post\">","        {{ csrf_field() }}","        <div class=\"form-group{{ $errors->has('name') ? ' has-error' : '' }}\">","          <label for=\"user_name\">お名前</label>","          <input class=\"form-control\" placeholder=\"名前を入力してください\" type=\"text\" name=\"name\" value=\"{{ old('name') }}\" required autofocus>","          @if ($errors->has('name'))","            <span class=\"help-block\">","              <strong>{{ $errors->first('name') }}</strong>","            </span>","          @endif","        </div>","        <div class=\"form-group{{ $errors->has('email') ? ' has-error' : '' }}\">","          <label for=\"user_email\">メールアドレス</label>","          <input class=\"form-control\" placeholder=\"emailを入力してください\" autocomplete=\"email\" type=\"email\" name=\"email\" value=\"{{ old('email') }}\" required>","            @if ($errors->has('email'))","              <span class=\"help-block\">","                <strong>{{ $errors->first('email') }}</strong>","              </span>","            @endif","        </div>","        <div class=\"form-group{{ $errors->has('password') ? ' has-error' : '' }}\">","          <label for=\"user_password\">パスワード</label>","          <em>(6文字以上入力してください)</em>","          <br>","          <input class=\"form-control\" placeholder=\"パスワードを入力してください\" autocomplete=\"off\" type=\"password\" name=\"password\" required>","            @if ($errors->has('password'))","              <span class=\"help-block\">","                <strong>{{ $errors->first('password') }}</strong>","              </span>","            @endif","        </div>","        <div class=\"form-group\">","          <label for=\"user_password_confirmation\">パスワード確認</label>","          <input class=\"form-control\" placeholder=\"パスワードを再度入力してください\" autocomplete=\"off\" type=\"password\" name=\"password_confirmation\" required>","        </div>","        <div class=\"text-center\">","          <input type=\"submit\" name=\"commit\" value=\"アカウントを作成\" class=\"btn submitBtn\" data-disable-with=\"アカウントを作成\">","        </div>","    </form>","  </div>","</div>","@endsection"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":51,"column":11},"end":{"row":51,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1589172877932,"hash":"d8e03aa6dfb379bd5326ba129c13d660ecf4324e"}