<?php
class WebsetModel extends Model{
    public $table_name = "webset";//逻辑表名
    public $error_info;
    /**
     * 显示列表信息
     */
    public function getList(){
        $sql = "select * from {$this->table()} where 1";
        return $this->db->fetchAll($sql);
    }

    /**
     * ajax判断标题名是否已经存在
     * @param $title string 
     * @return bool
     */
    public function ajaxaddtitleList($title){   
        $sql = "select count(*) from {$this->table()} where webset_title='$title'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info ="网站标题已经存在！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
        }
    }
    /**
     * ajax判断网站标题是否已经存在
     * @param $id int 
     * @param $title string 
     * @return bool
     */
    public function ajaxeditList($id,$title){
        $sql = "select count(*) from {$this->table()} where webset_id != '$id' and webset_title = '$title'";
        $coun_num = $this->db->fetchColumn($sql);
        if($coun_num > 0){
            $this->error_info = "更改的网站标题已经存在！！！";
            return false;
        }else{
            $this->error_info = "<img src='./app/view/admin/images/yes.gif' />";
            return true;
        }
    }
    /**
     * 编辑的信息
     * @param $data array 
     * @return bool
     */
    public function editList($data){
        $sql = "update {$this->table()} set webset_name='{$data['webset_name']}',webset_title='{$data['webset_title']}',webset_title_ico='{$data['webset_title_ico']}',webset_url='{$data['webset_url']}',webset_seo='{$data['webset_seo']}',webset_bewrite='{$data['webset_bewrite']}',webset_show='{$data['webset_show']}',web_foot_content='{$data['web_foot_content']}' where webset_id ='{$data['webset_id']}'";
        return $this->db->query($sql);
    }
}