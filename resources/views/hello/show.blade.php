@extends('layouts.helloapp')

@section('title')
	Show
@endsection

@section('menubar')
	@parent
	詳細ページ
@endsection

@section('content')
	@if($items!=null)
		@foreach($items as $item)
			<table width="400px">
				<tr width="50px">
					<th width="50px">:id</th>
					<td width="50px">{{$item->id}}</td>
				</tr>
				<tr>
					<th>:name</th>
					<td>{{$item->name}}</td>
				</tr>
			</table>
		@endforeach
	@endif
	@include('components.message', ['msg_title'=>'DB', 'msg_content'=>'クエリビルダの練習'])
@endsection

@section('footer')
	copyright 2020 turano.
@endsection