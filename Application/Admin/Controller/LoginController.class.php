<?php
	namespace Admin\Controller;
	use Think\Controller;

	class LoginController extends Controller{
		public function index(){
			$this->display();
		}

		public function logout(){
			session(null);
			//服务器上的session
			session('[destroy]');\
			cookie(session_name(),null);
			$data['status'] = 1;
			$this->ajaxReturn($data);
		}

		public function check(){
			$datas['username'] = $_POST['username'];
		
			$user = M('Users');
			
			$row = $user->where($_POST)->find();
			if($row){
				session('username',$_POST['username']);
				session('login',1);
				cookie('login',$_POST['username']);
				$data['status'] = 1;

				$this->ajaxReturn($data);
				//$this->success("登陆成功！",U('/thinkphp-demo/index.php/Admin/Admin/Index'));
			}
			else {
				$data['status'] = 0;
				cookie('login',null);
				$this->ajaxReturn($data);
				//$this->error('登陆错误','index');
			}
	}
}