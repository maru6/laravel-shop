@extends('layouts.app')
<<<<<<< HEAD

@section('tltle', '操作成功')
=======
@section('title', '操作成功')
>>>>>>> b761bc7375098edad89b552db124b7c74eb790a3

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">操作成功</div>
	<div class="panel-body text-center">
		<h1>{{ $msg }}</h1>
<<<<<<< HEAD
		<a class="btn btn-primary" href="{{ route('root') }}">返回首页</a>
=======
		<a href="{{ route('root') }}" class="btn btn-primary">返回首页</a>
>>>>>>> b761bc7375098edad89b552db124b7c74eb790a3
	</div>
</div>
@endsection