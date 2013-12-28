<?php
Class NewsControl extends Control{
	Public function index(){
		echo 12123;
	}
	/*添加数据*/
	Public function add(){
		if(IS_POST){
			$db = M('news');
			// $data = array(
			// 'title' => $this->_post('title'),
			// 'content' => $this->_post('content'),
			// );
			($db->add()) ? $this->success('添加成功','show') : $this->error('添加失败');
		}else{
			$this->display();
		}
		
		
	}
	/*文章列表*/
	Public function show(){
		$db = M('news');
		$total = $db->count();
		$page = new page($total,2);
		$news = $db->all($page->limit());

		// p($news);
		$this->assign('news',$news);
		$this->assign('page',$page->show());
		$this->display();
	}
}