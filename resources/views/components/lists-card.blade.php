@props(['list'])

<h2><a href="/list/{{ $list['id'] }}">{{ $list['subject'] }}</a></h2>
<p>{{ $list['content'] }}</p>
