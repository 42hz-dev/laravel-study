@extends('layout')

@section('content')
<h2>{{ $list['subject'] }}</h2>
<hr>
<p>{{ $list['email'] }}</p>
<p>{{ $list['content'] }}</p>
@endsection
