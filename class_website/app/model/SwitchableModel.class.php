<?php
class SwitchableModel extends Model{
    protected $table_name = "switchable";
    public $error_info;
    /**
     * 显示数据库的列表信息
     */
    public function getList(){
        $sql = "select * from {$this->table()} where 1 order by switchable_order desc";
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
        $sql = "select * from {$this->table()} where 1 order by switchable_order limit $offsize,$pagesize";
        $data['list'] = $this->db->fetchAll($sql);
        //获得总数据
        $sqls = "select count(*) from {$this->table()} where 1";
        $numbers = $this->db->fetchColumn($sqls);
        //获得总页数
        $data['total'] =$numbers;
        return $data;
     }
    /**
     * 更改信息
     * @param $data array
     * @param bool
     */
    public function editList($data){
        $sql = "update {$this->table()} set switchable_name = '{$data['switchable_name']}',switchable_images = '{$data['switchable_images']}',switchable_thumn = '{$data['switchable_thumn']}',switchable_content = '{$data['switchable_content']}',switchable_order = '{$data['switchable_order']}',switchable_show = '{$data['switchable_show']}' where switchable_id = '{$data['switchable_id']}' ";
        return $this->db->query($sql);
    }
}