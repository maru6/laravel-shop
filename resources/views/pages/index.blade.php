@extends('layouts.app')
@section('title', '查询')

@section('content')
foreach ($users as $user) {
    echo $user->name;
}
@endsection