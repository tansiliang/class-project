<?php
class DiscussModel extends Model{
    protected $table_name = "discuss";
    /**
     * 显示列表页
     */
    public function getList($page,$pagesize){
        $offsize = ($page - 1) * $pagesize;
        $sql = "select * from {$this->table()} as discuss join `gj_member` as member on discuss.discuss_memberid = member.member_id join `gj_forum` as forum on discuss.discuss_forumid = forum.forum_id order by discuss_addtime limit $offsize,$pagesize";
        $data['list'] = $this->db->fetchAll($sql);
        $sqls = "select count(*) from {$this->table()} where 1";
        $data['total'] = $this->db->fetchColumn($sqls);
        return $data;
    }
    /**
     * 显示编辑页面
     * @param $id int 
     * @
     */
    public function seleList($id){
        $sql = "select * from {$this->table()} as discuss join `gj_member` as member on discuss.discuss_memberid = member.member_id join `gj_forum` as forum on discuss.discuss_forumid = forum.forum_id order by discuss_addtime";
        return $this->db->fetchRow($sql);
    }
}