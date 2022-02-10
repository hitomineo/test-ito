<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
</head>

<body>
  <form action="/" method="POST">
    <table>
      @csrf


      @php
      $title = 'お問い合わせ';
      @endphp

      @extends('layout')
      @section('content')
      <div class="container">
        <h1 class="text-center mt-5 mb-5">お問い合わせ</h1>
        <div class="container">





          <div class="form-group row">
            <p class="col-sm-4 col-form-label">お名前　
            <p class="asterisk"></p>
            </p>
            <div class="col-sm-7">
              {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
          </div>

          @if ($errors->has('name'))
          <p class="alert alert-danger">{{ $errors->first('name') }}</p>
          @endif




          <div class="form-group row">
            <p class="col-sm-4 col-form-label">性別　※</p>
            <div class="col-sm-7">
              <label>{{ Form::radio('gender', "男性") }}男性</label>
              <label>{{ Form::radio('gender', "女性") }}女性</label>
            </div>
          </div>

          @if ($errors->has('gender'))
          <p class="alert alert-danger">{{ $errors->first('gender') }}</p>
          @endif



          <div class="form-group row">
            <p class="col-sm-4 col-form-label">メールアドレス　※ </p>
            <div class="col-sm-7">
              {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>
          </div>

          @if ($errors->has('email'))
          <p class="alert alert-danger">{{ $errors->first('email') }}</p>
          @endif




          <div class="form-group row">
            <p class="col-sm-4 col-form-label">郵便番号　※</p>
            <div class="col-sm-8">
              〒<input type="text" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');">
            </div>　　
          </div>　　

          @if ($errors->has('postcode'))
          <p class="alert alert-danger">{{ $errors->first('postcode') }}</p>
          @endif





          <div class="form-group row">
            <p class="col-sm-4 col-form-label">住所　※</p>
            <div class="col-sm-7">
              <input type="text" name="addr11" size="40">
            </div>
          </div>

          @if ($errors->has('address'))
          <p class="alert alert-danger">{{ $errors->first('address') }}</p>
          @endif




          <div class="form-group row">
            <p class="col-sm-4 col-form-label"> 建物名</p>
            <div class="col-sm-7">
              {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
          </div>







          <div class="form-group row">
            <p class="col-sm-4 col-form-label">ご意見　※</p>
            <div class="col-sm-7">
              {{ Form::textarea('contents', null, ['class' => 'form-control']) }}
            </div>
          </div>

          @if ($errors->has('opinion'))
          <p class="alert alert-danger">{{ $errors->first('opinion') }}</p>
          @endif





          <div class="text-center">
              {{ Form::submit('確認', ['class' => 'btn btn-dark']) }}
          </div>

          @endsection
        </div>
      </div>
    </table>
  </form>
</body>

</html>