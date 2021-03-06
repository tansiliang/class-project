<?php
class MemberModel extends Model{
    public $error_info;
    protected $table_name = "member";
    /**
     * 显示会员用户列表信息
     */
    public function getList(){
        $sql = "select * from {$this->table()} where 1";
        return $this->db->fetchAll($sql);
    }
    /**
     * 分页列表
     * @param $page int 
     * @param $pagesize int 
     * @return mixed 
     */
    public function getPageList($page,$pagesize){
        $offsize = ($page - 1) * $pagesize;
        $sql = "select * from {$this->table()} where 1 order by member_id desc limit $offsize,$pagesize";
        $data['list'] = $this->db->fetchAll($sql);
        //获得总数据
        $sqls = "select count(*) from {$this->table()} where 1";
        $numbers = $this->db->fetchColumn($sqls);
        //获得总页数
        $data['total'] =$numbers;
        return $data;
     }
    /**
     * ajax判断用户名是否存在
     * @param $name string
     * @return bool
     */
    public function addajaxList($name){
        $sql = "select count(*) from {$this->table()} where member_name = '$name'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info = "用户名已经存在，请重新输入！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }
    }
    /**
     * ajax判断编辑用户名是否存在
     * @param $id int 
     * @param $name string 
     * @return bool
     */
    public function editajaxList($id,$name){
        $sql = "select count(*) from {$this->table()} where member_name = '$name' and member_id != '$id'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info = "更改的用户名已经存在，请重新输入！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }
    }
    /**
     * ajax判断旧密码是否正确
     * @param $id int 
     * @param $pass int 
     * @return bool
     */
    public function editajaxoldpassList($id,$pass){
        $sql = "select count(*) from {$this->table()} where member_id = '$id' and member_pass='$pass'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num == 1){
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }else{
            $this->error_info = "输入的旧密码不正确，请重新输入！！！";
            return false;
        }
    }
    /**
     * 更改会员的信息
     * @param $data array
     * @return bool
     */
    public function editList($data){
        $sql = "update {$this->table()} set member_name = '{$data['member_name']}',member_pass = '{$data['member_pass']}',member_email = '{$data['member_email']}',member_imgthumn = '{$data['member_imgthumn']}',member_studentid = '{$data['member_studentid']}',member_truename = '{$data['member_truename']}',member_hobby = '{$data['member_hobby']}',member_content = '{$data['member_content']}',member_phone = '{$data['member_phone']}',member_images = '{$data['member_images']}',member_sex = '{$data['member_sex']}' where member_id = '{$data['member_id']}'";
        return $this->db->query($sql);
    }
    /**
     * 重置功能
     * @param $id int 
     * @return bool
     */
    public function resetList($id){
        $sql = "update {$this->table()} set member_pass = md5('123456') where member_id = '$id' ";
        return $this->db->query($sql);
    }
    /**
     * ajax判断当前的学号是否已经存在
     * @param $id int 
     * @param $studnetid int 
     * @return bool
     */
    public function ajaxstudentidList($id,$studentid){
        $sql = "select count(*) from {$this->table()} where member_studentid = '$studentid' and member_id != '$id'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info = "更改的学号已经存在，请重新输入！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }
    }
    /**
     * ajax判断添加的学号是否已经存在
     * @param $student int 
     * @return bool
     */
    public function addstudentidList($student){
        $sql = "select count(*) from {$this->table()} where member_studentid = '$student'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info = "学号已经存在，请重新输入！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }
    }
    /**
     * 前端页面的ajax搜索
     * @param $name string 
     * @return mixed
     */
    public function selectList($name){
        $sql = "select * from {$this->table()} where member_truename = '$name'";
        $sqls = "select count(*) from {$this->table()} where member_truename = '$name' ";
        $data['counts'] = $this->db->fetchColumn($sqls);
        $data['list'] = $this->db->fetchRow($sql);
        return $data;
    }
    /**
     * 获取所有的会员数
     */
    public function countList(){
        $sql = "select count(*) from {$this->table()} where 1";
        $coun_num = $this->db->fetchColumn($sql);
        return $coun_num;
    }
    /**
     * 验证密码是否正确
     * @param $data array
     * @return bool
     */
    public function validateList($data){
        $sql = "select * from {$this->table()} where member_studentid = '{$data['name']}' and member_pass='{$data['pass']}'";
       return $this->db->fetchRow($sql);
    }
    /**
     * font更改会员信息
     */
    public function editfontList($data){
        $sql = "update {$this->table()} set member_name = '{$data['member_name']}',member_email = '{$data['member_email']}',member_imgthumn = '{$data['member_imgthumn']}',member_truename = '{$data['member_truename']}',member_hobby = '{$data['member_hobby']}',member_content = '{$data['member_content']}',member_phone = '{$data['member_phone']}',member_images = '{$data['member_images']}',member_sex = '{$data['member_sex']}' where member_id = '{$data['member_id']}'";
        return $this->db->query($sql);
    }
    /**
     * ajax验证会员真实姓名是否已经存在
     * @param $id int 
     * @param $name string 
     * @return bool
     */
    public function edittrueajaxList($id,$name){
        $sql = "select count(*) from {$this->table()} where member_truename = '$name' and member_id != '$id'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info = "更改的姓名已经存在，请重新输入！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }
    }
    /**
     * ajax判断注册的学号是否已经存在
     * @param $studentid int 
     */
    public function addfontajaxList($studentid){
        $sql = "select * from {$this->table()} where member_studentid = '$studentid'";
        $count_num = $this->db->fetchColumn($sql);
        if($count_num > 0){
            $this->error_info = "学号已经存在，请重新输入！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }
    }

}