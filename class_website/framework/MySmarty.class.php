<?php
require "./framework/libs/Smarty.class.php";
class MySmarty extends Smarty{
    public function __construct(){
        //实例化Smarty类，调用其构造方法
        parent::__construct();
        //设置模板目录的名字
        $this->template_dir = $GLOBALS['config']['smarty']['template_dir'];
        $this->compile_dir = $GLOBALS['config']['smarty']['compile_dir'];
        // 设置边界符
        $this->left_delimiter = $GLOBALS['config']['smarty']['left_delimiter'];
        $this->right_delimiter = $GLOBALS['config']['smarty']['right_delimiter'];
    }
}