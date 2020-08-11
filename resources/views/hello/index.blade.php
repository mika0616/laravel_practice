<h2>test</h2>

@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<table>
		<thead>
			<tr>
				<th>name</th>
				<th>mail</th>
				<th>age</th>
			</tr>
		</thead>
		<tbody>
			@foreach($items as $item)
			<tr>
				<td>{{$item->name}}</td>
				<td>{{$item->mail}}</td>
				<td>{{$item->age}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@include('components.message', ['msg_title'=>'DB', 'msg_content'=>'DBクラスの練習'])
@endsection

@section('footer')
	copyright 2020 turano.
@endsection