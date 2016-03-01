<?php
namespace Home\Controller;
use Think\Controller;
class ExamController extends Controller {
	//考试列表
    public function exam(){
    	$this->display();
    }
    //历史试卷
    function history()
    {
    	$this->display();
    }
}