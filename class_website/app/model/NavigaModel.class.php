<?php
class NavigaModel extends Model{
    public $table_name = "naviga";//逻辑表名
    public $error_info;
    /**
     * 显示导航列表
     */
    public function getList(){
        $sql = "select * from {$this->table()} where 1 order by naviga_order";
        return $this->db->fetchAll($sql);
    }
    /**
     * 调用树状型分类导航
     */
    public function getTreeList($parent_id = 0){
        $list = $this->getList();
        return $this->getTree($list,$parent_id,0);
    }
    /**
     * 递归调用
     * 树状型排序和缩进
     * @param $arr array
     * @param $parent int 
     * @param $dree int
     * @return array
     */
    public function getTree($arr,$parent=0,$dree = 0){
        static $tree = array();
        foreach($arr as $row){
            if($row['naviga_parent'] == $parent){
                $row['dree'] = $dree;
                $tree[] = $row;
                $this->getTree($arr,$row['naviga_id'],$dree+1);
            }
        }
        return $tree;
    }
    /**
     * ajax判断添加导航的名字是否存在
     * @param $name string
     * @return bool
     */
    public function ajaxaddnameList($name){
        $sql = "select count(*) from {$this->table()} where naviga_name='$name'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info = "导航名已经存在！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }
    }
    /**
     * 判断需要删除导航名是否有叶子
     * @param $id int 
     */
    public function isList($id){
        $sql = "select count(*) from {$this->table()} where naviga_parent='$id'";
        $coun_num = $this->db->fetchColumn($sql);
        return $coun_num == 0;
    }
    /**
     * 执行更改编辑页面的信息
     * @param $data array
     * @return bool
     */
    public function editList($data){
        $sql = "update {$this->table()} set naviga_name='{$data['naviga_name']}',naviga_url='{$data['naviga_url']}',naviga_bar='{$data['naviga_bar']}',naviga_order='{$data['naviga_order']}',naviga_parent='{$data['naviga_parent']}' where naviga_id='{$data['naviga_id']}'";
        return $this->db->query($sql);
    }
    /**
     * ajax判断当前更改的用户名是否存在
     * @param $id int
     * @param $name string
     * @return bool
     */
    public function ajaxeditList($id,$name){
        $sql = "select count(*) from {$this->table()} where naviga_name='$name' and naviga_id != '$id'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info = "更改的导航名已经存在！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }
    }
    
}