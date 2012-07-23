<?php 
class Controller_Index extends Controller
{
	private $is_login;
	public function before()
	{
		parent::before();
		//ログイン判定
		$this->is_login = (Twitter::logged_in())? true : false;
	}

	public function action_index()
	{	
		if($this->is_login)
		{
		}
			//TODO ユーザ情報の取得
			return View::forge('index/index',array('is_login' => $this->is_login));
	}

	public function action_login()
	{
		Twitter::set_callback(Uri::create('index/callback'));
		Twitter::login();
	}
	public function action_callback()
	{
		Response::redirect('index/index');
	}
	public function action_logout()
	{
		Session::destroy();
		Response::redirect('index/index');
	}

	//もっっっっっっっっっっっっっっっっす！！！！！！！！
	public function action_post_moss()
	{
		//login判定
		if(!$this->is_login){
			Response::redirect('index/index');
		}
		else{
		
		Twitter::post('statuses/update',array('status' => 'もっっっっっっっっっっっっす！！'));
		Response::redirect('index/index');
		}
	}

}
