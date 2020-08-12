<h2>test</h2>

@extends('layouts.helloapp')

@section('title', 'Board.Index')

@section('menubar')
	@parent
　	ボードページ
@endsection

@section('content')
	<table>
		<tr>
			<th>Data</th>
			<th>Name</th>
		</tr>
		@foreach($items as $item)
		<tr>
			<td>{{$item->message}}</td>
			<td>{{$item->person->name}}</td>
		</tr>
		@endforeach
	</table>
	@include('components.message', ['msg_title'=>'モデル', 'msg_content'=>'Eloquentの練習'])
@endsection

@section('footer')
	copyright 2020 turano.
@endsection