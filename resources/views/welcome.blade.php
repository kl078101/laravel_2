@extends('admin.layouts.app')

@section('title')
我是小可爱
@endsection

@section('content')
我是 2
{!! config('project.admin.state')[0] !!}
@endsection
