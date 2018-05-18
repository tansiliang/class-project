<?php
class AdminModel extends Model{
    public $table_name = "admin_user";//逻辑表名
    /**
     * 显示当前管理员的信息
     * $user
     */
    public function listList($user){
        $sql = "select * from {$this->table()} where ad_username='$user'";
        return $this->db->fetchRow($sql);
    }
    /**
     * 验证登录的信息
     * @param $data array 
     * @return 
     */
    public function validateList($data){
        $sql = "select * from {$this->table()} where ad_username = '{$data['username']}' and ad_userpass = md5('{$data['userpass']}')";
        return $this->db->fetchRow($sql);
    }

    /**
     * 验证自动登录的信息是否正确
     */
    public function checkCookie(){
        //判断当前是否有cookie值
        if($_COOKIE['ad_username'] == "" || $_COOKIE['ad_password'] == ""){
            return false;
        }
        $sql = "select * from {$this->table()} where ad_username = '{$_COOKIE['ad_username']}' and concat(md5(ad_userpass,ad_salt)) = '{$_COOKIE['ad_userpass']}'";
        $this->info = "验证自动登录信息";
        return $this->db->query($sql);
    }
    /**
     * 显示管理员列表
     * @param $data array
     */
    public function getList($data){
        //获得当前的ip，和最后登录的时间
        $sqls = "update {$this->table()} set ad_lasttime = '{$data['ad_lasttime']}',ad_lastip='{$data['ad_lastip']}' where ad_id = '{$data['ad_id']}'";
        $this->db->query($sqls);
        $sql = "select * from {$this->table()} where 1 order by ad_addtime";
        $info = "显示管理员列表";
        return $this->db->fetchAll($sql);
    }
    /**
     * ajax验证添加的用户名
     * @param $name string
     * @return bool
     */
    public function addList($name){
        $sql = "select count(*) from {$this->table()} where ad_username= '$name'";
        $coun_num = $this->db->fetchColumn($sql);
        //当条件成立的时候说明用户名已经存在
        if($coun_num > 0){
            $this->error_info = "用户名已经存在，请重新输入！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
            return true;
        }
    }
    /**
     * ajax判断编辑用户名
     * @param $name string 
     * @param $id int 
     */
    public function editajaxList($id,$name){
        $sql = "select count(*) from {$this->table()} where ad_username = '$name' and ad_id != '$id'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info = "更改的用户名已经存在，请重新输入！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
            return true;
        }
    }
    /**
     * 判断编辑页面输入的旧密码是否正确
     * @param $data
     * @return bool
     */
    public function ajaxoldpassList($data){
        $sql = "select count(*) from {$this->table()} where ad_id = '{$data['id']}' and ad_userpass = md5('{$data['ad_userpass']}')";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num == 1){
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />" ;
        }else{
            $this->error_info = "输入的旧密码不正确！！！";
            return false;
        }
    }

    /**
     * 提交编辑管理员信息
     * @param $data array
     * @return bool
     */
    public function editList($data){
        $sql = "update {$this->table()} set ad_username='{$data['ad_username']}',ad_userpass='{$data['ad_userpass']}',ad_email='{$data['ad_email']}',ad_salt='{$data['ad_salt']}' where ad_id='{$data['ad_id']}' ";
        return $this->db->query($sql);
    }
    /**
     * 重置密码
     * @param $id int
     * @return bool 
     */
    public function resetList($id){
        $sql = "update {$this->table()} set ad_userpass = md5('123456') where ad_id = '$id'";
        return $this->db->query($sql);
    }
}