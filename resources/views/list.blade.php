@extends('layout')

@section('content')

    <h1>{{ $heading }}</h1>
    @if(count($lists) === 0)
        <p>empty data</p>
    @endif

    <section class="post-list">
        @foreach($lists as $list)
            <article class="post">
                <x-lists-card :list="$list" />
            </article>
        @endforeach
    </section>

@endsection
