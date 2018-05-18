<?php
class WorkModel extends Model{
    public $table_name = "work";
    public $error_info;
    /**
     * 列表
     */
    public function getList(){
        $sql = "select * from {$this->table()} where 1 order by work_order";
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
        $sql ="select * from {$this->table()} as work join `gj_naviga` as class_name on work.work_categoryid = class_name.naviga_id order by work.work_update desc limit $offsize,$pagesize";
        $data['list'] = $this->db->fetchAll($sql);
        //获得总数据
        $sqls = "select count(*) from {$this->table()} where 1";
        $numbers = $this->db->fetchColumn($sqls);
        //获得总页数
        $data['total'] =$numbers;
        return $data;
     }
    /**
     * 更改编辑页面的信息
     */
    public function editList($data){
        $sql = "update {$this->table()} set work_update = '{$data['work_update']}',work_content = '{$data['work_content']}',work_hot = '{$data['work_hot']}',work_order = '{$data['work_order']}',work_show = '{$data['work_show']}',work_images = '{$data['work_images']}',work_thumn = '{$data['work_thumn']}',work_categoryid = '{$data['work_categoryid']}',work_title = '{$data['work_title']}',work_subtitle = '{$data['work_subtitle']}' where work_id = '{$data['work_id']}'";
        return $this->db->query($sql);
    }
}