<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#ディレクティブforeach
class HelloController extends Controller{
	public function index(){
		$data=['one', 'two', 'three','four'];
		return view('hello.index', ['data'=>$data]);
	}
}





#ディレクティブisset
/*class HelloController extends Controller{
	public function index(){
		return view('hello.index');
	}
	##postメソッドを作成
	public function post(Request $request){
		return view('hello.index', ['msg'=>$request->msg]);
	}
}*/




#ディレクティブif
/*class HelloController extends Controller{
	public function index(){
		return view('hello.index', ['msg'=>'']);
	}
	##postメソッドを作成
	public function post(Request $request){
		return view('hello.index', ['msg'=>$request->msg]);
	}
}*/





#フォームをつかってみる
/*class HelloController extends Controller{
	public function index(){
		$data=[
			'msg'=>'お名前を入力してください',
		];
		return view('hello.index', $data);
	}
	##postメソッドを作成
	public function post(Request $request){
		$msg= $request->msg;
		$data=[
			'msg'=>'こんにちは'.$msg.'さん'
		];
		return view('hello.index', $data);
	}
}*/




#bladeテンプレート（同名の.phpファイルがあっても、bladeテンプレートが優先して呼び出される。）
/*class HelloController extends Controller{
	public function index(){
		$data=[
			'msg'=>'これはBladeを使ったサンプルです。',
		];
		return view('hello.index', $data);
	}
}*/




#クエリを用い値をテンプレートに渡す
/*class HelloController extends Controller{
	public function index(Request $request){#Requestインスタンスを呼び出し$requestに代入
		$data=[
			'msg'=>'これはコントローラーから渡されたメッセージです。',
			'id'=>$request->id#Requestインスタンスからid情報を取り出して代入
		];
		return view('hello.index', $data);
	}
}*/




#PHPテンプレートにルートパラメータから値を渡す
// class HelloController extends Controller{
// 	public function index($id=zero){#$idを定義し初期値zeroを入れておく
// 		$data=[
// 			'msg'=>'これはコントローラーから渡されたメッセージです。',
// 			'id'=>$id#先ほど定義した初期値を代入
// 		];
// 		return view('hello.index', $data);
// 	}
// }




#PHPテンプレートにPHPを埋め込む
/*class HelloController extends Controller{
	public function index(){
		$data=['msg'=>'これはコントローラーから渡されたメッセージです。'];
		return view('hello.index', $data);
	}
}*/




#PHPテンプレート（コントローラを使う）
/*class HelloController extends Controller{
	public function index(){
		view('hello.index');
	}
}*/






#requstとresponse
/*use Illuminate\Http\Response;

class HelloController extends Controller{
	public function index(Request $request, Response $response){
		$html=<<<EOF
		<html>
		<head>
			<title>Hello/Index</title>
			<style>
				body{
					font-size:16pt; color:#999;
				}
				h1{
					font-size:100pt; text-align:right; color:#eee; margin:-40px 0px =50px 0px;
				}
			</style>
		</head>
		<body>
			<h1>Index</h1>
			<p>これはHelloコントローラのindexアクションです</p>
			<h3>Requast</h3>
			<pre>{$request}</pre>
			<h3>Response</h3>
			<pre>{$response}</pre>
		</body>
		</html>
		EOF;
		$response->setContent($html);
		return $response;
	}
}*/



#シングルアクションコントローラ
/*class HelloController extends Controller{
	public function __invoke(){
		return <<<EOF
		<html>
		<head>
			<title>Hello/Index</title>
			<style>
				body{
					font-size:16pt; color:#999;
				}
				h1{
					font-size:100pt; text-align:right; color:#eee; margin:-40px 0px =50px 0px;
				}
			</style>
		</head>
		<body>
			<h1>SingleAction</h1>
			<p>これはシングルアクションコントローラのアクションです</p>

		</body>
		</html>
		EOF;
	}
}*/






#複数アクションを定義
/*global $head, $style, $body, $end;
$head='<html><head>';
$style=<<<EOF
		<style>
			body{
				font-size:16pt; color:#999;
			}
			h1{
				font-size:100pt; text-align:right; color:#eee; margin:-40px 0px =50px 0px;
			}
		</style>
	EOF;
$body='</head><body>';
$end='</body></html>';

function tag($tag, $txt){
	return "<{$tag}>".$txt."</{$tag}>";
}

class HelloController extends Controller
{
	public function index(){
		global $head, $style, $body, $end;
		$html=$head.tag('title', 'Hello/Index').$style.$body.tag('h1', 'Index').tag('p', 'This is Index Page').'<a href="/hello/other">go to Other page</a>'.$end;
		return $html;
	}
	public function other(){
		global $head, $style, $body, $end;
		$html=$head.tag('title', 'Hello/Other').$style.$body.tag('h1', 'Other').tag('p', 'This is Other Page').$end;
		return $html;
	}
}*/






#indexアクション
/*class HelloController extends Controller
{
	public function index(){
		return <<<EOF
		<html>
		<head>
			<title>Hello/Index</title>
			<style>
				body{
					font-size:16pt; color:#999;
				}
				h1{
					font-size:100pt; text-align:right; color:#eee; margin:-40px 0px =50px 0px;
				}
			</style>
		</head>
		<body>
			<h1>Index</h1>
			<p>これはHelloコントローラのindexアクションです</p>

		</body>
		</html>
		EOF;
	}
}*/
    //

