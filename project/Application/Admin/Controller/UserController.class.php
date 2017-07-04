<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
    	$mod=M('users');
    	$list=$mod->select();
    	// var_dump($list);

    	$this->assign('list',$list);
    	$this->display('User/index');

    }
    public function add(){
    	$this->display('User/add');
    }

    public function doadd(){
    	// var_dump($_POST);
    	$user['uname']=$_POST['uname'];
    	$user['pwd']=$_POST['pwd'];
    	$user['addtime']=time();
    	// var_dump($user);
    	$mod=M('users');
    	if($mod->add($user)){
    		$this->success('添加成功',U('User/index'));
    	}else{
    		$this->error('添加失败');
    	}

    }
    public function del(){
    	// var_dump($_GET);
    	$id=$_GET['id'];
    	// echo $id;
    	$mod=M('users');
    	if($mod->delete($id)){
    		$this->success('删除成功',U('User/index'));
    	}else{
    		$this->error('删除失败');
    	}
    }

    public function edit(){
    	$id=$_GET['id'];
    	$mod=M('users');
    	$list=$mod->where('id='.$id)->find();
    	// var_dump($list);
    	$this->assign('list',$list);
    	$this->display('User/edit');
    }

    public function update(){
    	// var_dump($_POST);
    	$user['id']=$_POST['id'];
    	$user['uname']=$_POST['uname'];
    	$user['pwd']=$_POST['pwd'];
    	$user['addtime']=time();
    	$mod=M('users');
    	if($mod->save($user)){
    		$this->success('修改成功',U('User/index'));
    	}else{
    		$this->error('修改失败');
    	}
    }

    public function rolelist(){
        // var_dump($_GET);
        $id=$_GET['id'];
        // echo $id;
        // 分配用户信息
        $u=$mod=M('users')->find($id);
        // var_dump($u);
        $this->assign('user',$u);
        // 分配角色
        $rolelist=M('role')->field('id,name')->select();
        // var_dump($rolelist);
        $this->assign('rolelist',$rolelist);
        //获取用户角色
        $roles=M('user_role')->where('uid='.$id)->select();
        // var_dump($roles);
        $r=[];
        foreach($roles as $v){
            $r[]=$v['rid'];
        }
        // var_dump($r);
        // 分配当前用户角色id
        $this->assign('r',$r);



        $this->display("User/rolelist");
    }

    public function dorole(){
        // var_dump($_POST['rids']);
        // var_dump($_GET);
        $uid=$_GET['id'];
        $rid=$_POST['rids'];
        M('user_role')->where('uid='.$uid)->delete();
        foreach ($rid as $v) {
            $date['uid']=$uid;
            $date['rid']=$v;
            M('user_role')->add($date);
        }
        $this->success('分配成功',U('User/index'));

    }
















    // public function addinfo(){
    //     $id=$_GET['id'];
    //     $this->assign('id',$id);
    // 	$this->display('User/addinfo');
    // }

    // public function uinfo(){
    // 	$id=$_GET['id'];
    // 	// var_dump($_GET);
    // 	$mod=M('userinfo');
    // 	$list=$mod->where("uid=".$id)->find();
    // 	// var_dump($list);
    //     $this->assign('list',$list);
    //     $this->assign('id',$id);
    //     $this->display('User/userinfo');
    // }

    // public function doinfoadd(){
    // 	// var_dump($_POST);
    // 	// var_dump($_FILES);
    //     $upload = new \Think\Upload();// 实例化上传类
    //     $upload->maxSize   =     0 ;// 设置附件上传大小
    //     $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    //     $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传根目录
    //     // 上传文件 
    //     $info   =   $upload->upload();
    //     if(!$info) {// 上传错误提示错误信息
    //         $this->error($upload->getError());
    //     }else{// 上传成功
    //         // $this->success('上传成功！');
    //         foreach ($info as $key) {
    //             // var_dump($key);
    //             $image=new \Think\Image();
    //             $image->open("./Public/Uploads/".$key['savepath'].$key['savename']);
    //             $image->thumb(100,100)->save("./Public/Uploads/".$key['savepath']."t_".$key['savename']);
    //         }
    //     }
    //     // var_dump($key['savename']);
    //     $mod=M('userinfo');
    //     $info['uid']=$_POST['uid'];
    //     $info['name']=$_POST['name'];
    //     $info['age']=$_POST['age'];
    //     $info['sex']=$_POST['sex'];
    //     $info['phone']=$_POST['phone'];
    //     $info['email']=$_POST['email'];
    //     $info['pic']=$key['savepath']."t_".$key['savename'];
    //     $info['address']=$_POST['address'];
    //     // var_dump($info);
    //     if($mod->add($info)){
    //         $this->success('添加成功',U('User/index'));
    //     }else{
    //         $this->error('添加失败');
    //     }

    // }
}