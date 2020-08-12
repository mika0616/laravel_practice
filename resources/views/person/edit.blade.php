<h2>test</h2>
@extends('layouts.helloapp')

@section('title', 'Person.edit')

@section('menubar')
	@parent
	編集ページ
@endsection

@section('content')
	@if(count($errors)>0)
		<div>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/person/edit" method="post">
		<input type="hidden" name="id" value="{{$form->id}}">
		<table>
			@csrf
			<tr>
				<th>name: </th>
				<td><input type="text" name="name" value="{{$form->name}}"><td>
			</tr>
			<tr>
				<th>mail:</th>
				<td><input type="text" name="mail" value="{{$form->mail}}"> </td>
			</tr>
			<tr>
				<th>age</th>
				<td><input type="number" name="age" value="{{$form->age}}"> </td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="edit"> </td>
			</tr>
		</table>
	</form>
	@include('components.message', ['msg_title'=>'DB', 'msg_content'=>'DBクラスの練習'])
@endsection

@section('footer')
	copyright 2020 turano.
@endsection