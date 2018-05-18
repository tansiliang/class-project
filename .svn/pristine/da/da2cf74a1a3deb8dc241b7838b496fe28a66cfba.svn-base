<?php
class ReplyModel extends Model{
    protected $table_name = "reply";
    /**
     * 显示评论列表
     */
    public function getList($page,$pagesize){
        $offsize = ($page - 1) * $pagesize;
        $sql = "select *,member1.member_name as name1,member2.member_name as name2 from {$this->table()} as reply join `gj_member` as member1 on reply.reply_formid=member1.member_id join `gj_member` as member2 on reply.reply_toid=member2.member_id join `gj_discuss` as discuss on reply.reply_discussid = discuss.discuss_id order by reply_time desc limit $offsize,$pagesize";
        $data['list'] = $this->db->fetchAll($sql);
        $sqls = "select count(*) from {$this->table()} where 1";
        $data['total'] = $this->db->fetchColumn($sqls);
        return $data;
    }
    /**
     * 显示详细信息
     * @param $id int 
     * @return bool
     */
    public function seleList($id){
        $sql = "select *,member1.member_name as name1,member2.member_name as name2 from {$this->table()} as reply join `gj_member` as member1 on reply.reply_formid=member1.member_id join `gj_member` as member2 on reply.reply_toid=member2.member_id join `gj_discuss` as discuss on reply.reply_discussid = discuss.discuss_id order by reply_time desc";
        return $this->db->fetchRow($sql);
    }
    
}