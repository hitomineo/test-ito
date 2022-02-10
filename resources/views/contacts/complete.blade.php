<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ完了ページ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

@php
$title = 'お問い合わせ';
@endphp

@extends('layout')

@section('content')


<body>
  <div class="text-center">
    <h1 class="text-center mt-5 mb-5"> ご意見いただきありがとうございました。</h1>
    <a href="{{ route('contact') }}" class="btn btn-dark">トップページへ</a>
  </div>
  @endsection
</body>

</html>