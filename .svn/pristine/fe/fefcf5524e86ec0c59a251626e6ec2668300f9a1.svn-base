<?php
class ArrondiModel extends Model{
    public $table_name = "arrondi";
    /**
     * 显示列表
     */
    public function getList(){
        $sql = "select * from {$this->table()} as a left join `gj_member`as m on a.arrondi_memberid = m.member_id";
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
        $sql = "select * from {$this->table()} as a left join `gj_member`as m on a.arrondi_memberid = m.member_id where 1 order by member_id desc limit $offsize,$pagesize";
        $data['list'] = $this->db->fetchAll($sql);
        //获得总数据
        $sqls = "select count(*) from {$this->table()} where 1";
        $numbers = $this->db->fetchColumn($sqls);
        //获得总页数
        $data['total'] =$numbers;
        return $data;
     }
     /**
      * 显示编辑页面
      */
      public function seleList($id){
          $sql = "select * from {$this->table()} as a left join `gj_member` as m on a.arrondi_memberid = m.member_id where a.arrondi_id = '$id'";
          return $this->db->fetchRow($sql);
      }
      /**
       * 获取编辑页面的信息
       * @param $data 
       * @return bool
       */
      public function editList($data){
          $sql = "update {$this->table()} set arrondi_type = '{$data['arrondi_type']}',arrondi_content = '{$data['arrondi_content']}',arrondi_title = '{$data['arrondi_title']}' where arrondi_id = '{$data['arrondi_id']}'";
          return $this->db->query($sql);
      }
      /**
       * 记录当前一共有多少条数据
       */
      public function arrondicountList(){
          $sql = "select count(*) from {$this->table()} where 1";
          $coun_num = $this->db->fetchColumn($sql);
          return $coun_num;
      }
}