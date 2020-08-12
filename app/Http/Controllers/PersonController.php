<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

#エロクエントを使う
class PersonController extends Controller
{
	public function index(Request $request){
		#リレーション（has）で選択してgetで取り出し
		$hasItems=Person::has('boards')->get();
		#リレーション（has/doesnthave）で選択してgetでとりだし
		$noItems=Person::doesntHave('boards')->get();
		$param=['hasItems'=>$hasItems, 'noItems'=>$noItems];
		return view('person.index', $param);
	}
	public function find(Request $request){
		#検索前なので、inputには空の値を入れておく
		return view('person.find', ['input'=>'']);
	}
	public function serch(Request $request){
		$item=Person::find($request->input);
		$param=['input'=>$request->input, 'item'=>$item];
		#テンプレートにinputで得たidとfindで得たインスタンスを$paramにいれて渡す
		#inputにidが入ることによりformに値が入る
		return view('person.find', $param);
	}
	public function add(Request $request){
		return view('person.add');
	}
	public function create(Request $request){
		#バリデーションの実行
		$this->validate($request, Person::$rules);
		#Personインスタンスをnew(するだけ)
		$person=new Person;
		#値を用意。フォームで送信された値を全て$formの中にset
		$form=$request->all();
		#CSRF対策の_tokenが邪魔なので取り外す
		unset($form['_token']);
		#newしたpersonインスタンスに、fill()を使って配列となったformの値をプロパティに代入し、保存
		$person->fill($form)->save();
		return redirect('/person');
	}
	public function edit(Request $request){
		$person=Person::find($request->id);
		return view('person.edit', ['form'=>$person]);
	}
	public function update(Request $request){
		$this->validate($request, Person::$rules);
		#find()で更新するインスタンスを用意
		$person=Person::find($request->id);
		$form=$request->all();
		unset($form['_token']);
		$person->fill($form)->save();
		return redirect('/person');
	}
	public function delete(Request $request){
		$person=Person::find($request->id);
		return view('person.delete', ['form'=>$person]);
	}
	public function remove(Request $request){
		Person::find($request->id)->delete();
		return redirect('/person');
	}
}
