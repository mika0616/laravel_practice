<h2>test</h2>
@extends('layouts.helloapp')

@section('title', 'Board.add')

@section('menubar')
	@parent
	投稿ページ
@endsection

@section('content')
	<form action="/board/add" method="post">
		<table>
			@csrf
			<tr>
				<th>person_id: </th>
				<td><input type="number" name="person_id"><td>
			</tr>
			<tr>
				<th>title:</th>
				<td><input type="text" name="title"> </td>
			</tr>
			<tr>
				<th>message:</th>
				<td><input type="text" name="message"> </td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="send"> </td>
			</tr>
		</table>
	</form>
	@include('components.message', ['msg_title'=>'DB', 'msg_content'=>'DBクラスの練習'])
@endsection

@section('footer')
	copyright 2020 turano.
@endsection