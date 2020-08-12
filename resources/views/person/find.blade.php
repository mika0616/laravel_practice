<h2>test</h2>

@extends('layouts.helloapp')

@section('title', 'Find')

@section('menubar')
	@parent
	検索ページ
@endsection

@section('content')
	<form action="/person/find" method="post">
		@csrf
		<input type="text" name="input" value="{{$input}}">
		<input type="submit" value="find">
	</form>
	@if(isset($item))
	<table>
		<tr>
			<th>Data</th>
		</tr>
		<tr>
			<td>{{$item->getData()}}</td>
		</tr>
	</table>
	@endif
	@include('components.message', ['msg_title'=>'モデル', 'msg_content'=>'Eloquentの練習'])
@endsection

@section('footer')
	copyright 2020 turano.
@endsection