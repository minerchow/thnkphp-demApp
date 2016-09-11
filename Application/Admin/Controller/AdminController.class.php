<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){
        $this->display();
    }

    /**
	*新建方法
    **/
	public function postAdd(){
		$User = M('User');
		$data['username'] = $_POST['name'];
		$data['age'] = $_POST['age'];
		$User->add($data);
	}

    public function add(){
    	

    	$this->display();	
    }	
    /**
	*浏览方法
    */
    public function show(){
    	$User = M('User')->select();
    	
    	$this->assign("userData",$User);
    	$this->display();
    }
    /**
	*编辑方法
    **/
	public function postEdit(){
		$User = M('User');
		$data['username'] = $_POST['name'];
		$data['age'] = $_POST['age'];
		$id = $_POST['id'];
		$User->where('id='.$id)->save($data);
	}

    public function edit($id){
    	
    	$User = M('User');
    	//$condition['id'] = $id;
    	$showData = $User->where('id='.$id)->select();
    
    	$this->assign("userData",$showData[0]);
    	$this->display();
    }

    /***
	*删除方法
    **/
    public function del(){
    	$User = M('User');
    	$id = $_POST['id'];
    	$User->delete($id);
    }
}