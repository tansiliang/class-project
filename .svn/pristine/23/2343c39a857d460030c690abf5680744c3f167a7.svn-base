<?php 
class ForumModel extends Model{
    protected $table_name = "forum";
    public $error_info;
    /**
     * 显示论坛分页列表
     * @param $page int 
     * @param $pagesize int 
     * @return mixed 
     */
    public function getList($page,$pagesize ){
        $offsize = ($page-1)*$pagesize;
        $sql = "select * from {$this->table()} as forum join `gj_member` as member on forum.forum_memberid = member.member_id order by forum.forum_addtime limit $offsize,$pagesize ";
        $data['list'] = $this->db->fetchAll($sql);
        $sqls = "select count(*) from {$this->table()} where 1";
        $data['total'] = $this->db->fetchColumn($sqls);
        return $data;
    }
    /**
     * 显示编辑页面的信息
     */
    public function seleList($id){
        $sql = "select * from {$this->table()} as forum join `gj_member` as member on forum.forum_memberid = member.member_id where forum_id = '$id' ";
        return $this->db->fetchRow($sql);
    }
    /**
     * 更改编辑信息
     * @param $data array 
     * @return bool
     */
    public function editList($data){
        $sql = "update {$this->table()} set forum_content='{$data['forum_content']}',forum_title='{$data['forum_title']}',forum_images='{$data['forum_images']}' where forum_id = '{$data['id']}'";
        return $this->db->query($sql);
    }
}