<?php
class AddresslistModel extends Model{
    protected $table_name = "addresslist";
    public $error_info;
    /**
     * 显示列表
     * @param $page int 
     * @param $pagesize int 
     * @return bool
     */
    public function getList($page,$pagesize){
        $offsize = ($page-1)*$pagesize;
        $sql = "select * from {$this->table()} as list join `gj_member` as member on list.list_memberid = member.member_id order by list.list_time desc limit $offsize,$pagesize ";
        $data['list'] = $this->db->fetchAll($sql);
        $sqls = "select count(*) from {$this->table()} where 1";
        $data['total'] = $this->db->fetchColumn($sqls);
        return $data;
    }
    /**
     * 显示编辑页面
     * @param $id int 
     * @return bool
     */
    public function seleList($id){
        $sql = "select * from {$this->table()} as list join `gj_member` as member on list.list_memberid = member.member_id where list.list_id='$id' order by list.list_time desc "; 
        return $this->db->fetchRow($sql);
    }
    /**
    * ajax显示搜索内容
    */
    public function ajaxsearchList($search){
        $sql = "select * from {$this->table()} as l join `gj_member` as m on l.list_memberid = m.member_id ";
        $sql .= "where concat(m.member_name,m.member_studentid,l.list_content,l.list_hobby,l.list_phone) like '%$search%'";
        return $this->db->fetchAll($sql);
    }
}
