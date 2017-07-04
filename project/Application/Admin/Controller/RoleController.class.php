<?php
namespace Admin\Controller;
use Think\Controller;
class RoleController extends Controller {
	public function index(){
		$mod=M('role');
		$list=$mod->select();
		$this->assign('list',$list);
		$this->display('Role/index');

	}

	public function add(){
		$this->display('Role/add');
	}

	public function doadd(){
		$role['name']=$_POST['name'];
		$role['remark']=$_POST['remark'];
		$mod=M('role');
		if($mod->add($role)){
			$this->success('添加成功',U('Role/index'));
		}else{
			$this->error('添加失败');
		}
	}

	public function del(){
    	// var_dump($_GET);
    	$id=$_GET['id'];
    	// echo $id;
    	$mod=M('role');
    	if($mod->delete($id)){
    		$this->success('删除成功',U('Role/index'));
    	}else{
    		$this->error('删除失败');
    	}
    }

	public function edit(){
    	$id=$_GET['id'];
    	$mod=M('role');
    	$list=$mod->where('id='.$id)->find();
    	// var_dump($list);
    	$this->assign('list',$list);
    	$this->display('Role/edit');
    }

    public function update(){
    	// var_dump($_POST);
    	$role['id']=$_POST['id'];
    	$role['name']=$_POST['name'];
    	$role['remark']=$_POST['remark'];
    	$mod=M('role');
    	if($mod->save($role)){
    		$this->success('修改成功',U('Role/index'));
    	}else{
    		$this->error('修改失败');
    	}
    }

    public function nodelist(){
        // var_dump($_GET);
        $id=$_GET['id'];
        // echo $id;
        // 分配角色信息
        $role=$mod=M('role')->find($id);
        // var_dump($u);
        $this->assign('role',$role);
        // 分配节点
        $nodelist=M('node')->field('id,name')->select();
        // var_dump($nodelist);
        $this->assign('nodelist',$nodelist);
        //获取当前角色的节点信息
        $nodes=M('role_node')->where('rid='.$id)->select();
        // var_dump($roles);
        $n=[];
        foreach($nodes as $v){
            $n[]=$v['nid'];
        }
        // var_dump($r);
        // 分配当前用户角色id
        $this->assign('n',$n);
        $this->display("Role/nodelist");
    }

    public function donode(){
        // var_dump($_POST['rids']);
        // var_dump($_GET);
        $rid=$_GET['id'];
        $nid=$_POST['nids'];
        M('role_node')->where('rid='.$rid)->delete();
        foreach ($nid as $v) {
            $date['rid']=$rid;
            $date['nid']=$v;
            M('role_node')->add($date);
        }
        $this->success('分配成功',U('Role/index'));

    }

    public function nodeindex(){
    	$mod=M('node');
    	$list=$mod->select();
    	$this->assign("list",$list);
    	$this->display('Role/nodeindex');
    }

    public function addnode(){
    	$this->display('Role/addnode');
    }

    public function doaddnode(){
		$node['name']=$_POST['name'];
		$node['mname']=$_POST['mname'];
		$node['aname']=$_POST['aname'];
		$mod=M('node');
		if($mod->add($node)){
			$this->success('添加成功',U('Role/nodeindex'));
		}else{
			$this->error('添加失败');
		}
	}

	public function delnode(){
    	// var_dump($_GET);
    	$id=$_GET['id'];
    	// echo $id;
    	$mod=M('node');
    	if($mod->delete($id)){
    		$this->success('删除成功',U('Role/nodeindex'));
    	}else{
    		$this->error('删除失败');
    	}
    }

    public function editnode(){
    	$id=$_GET['id'];
    	$mod=M('node');
    	$list=$mod->where('id='.$id)->find();
    	// var_dump($list);
    	$this->assign('list',$list);
    	$this->display('Role/editnode');
    }

    public function updatenode(){
    	// var_dump($_POST);
    	$node['id']=$_POST['id'];
    	$node['name']=$_POST['name'];
    	$node['mname']=$_POST['mname'];
    	$node['aname']=$_POST['aname'];
    	$mod=M('node');
    	if($mod->save($node)){
    		$this->success('修改成功',U('Role/nodeindex'));
    	}else{
    		$this->error('修改失败');
    	}
    }
}