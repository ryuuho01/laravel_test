@extends('layouts.default')
@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/thanks" method="post">
  @csrf
  <p>氏名</p>
  <input type="text" name="name">
  <p>メールアドレス</p>
  <input type="text" name="email"><br>
  <input type="submit" name="submit" value="送信する">
</form>
@endsection
