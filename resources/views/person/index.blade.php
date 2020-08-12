<h2>test</h2>

@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<table>
		<tr>
			<th>Person</th>
			<th>Board</th>
		</tr>
		@foreach($hasItems as $item)
		<tr>
			<td>{{$item->getData()}}</td>
			<td>
				<table width="100%">
					@foreach($item->boards as $obj)
						<tr>
							<td>{{$obj->getData()}}</td>
						</tr>
					@endforeach
				</table>
			</td>
		</tr>
		@endforeach
	</table>
	<div style="margin: 10px;"></div>
	<table>
		<tr>
			<th>Person</th>
		</tr>
		@foreach($noItems as $item)
		<tr>
			<td>{{$item->getData()}}</td>
		</tr>
		@endforeach
	</table>
	@include('components.message', ['msg_title'=>'モデル', 'msg_content'=>'Eloquentの練習'])
@endsection

@section('footer')
	copyright 2020 turano.
@endsection