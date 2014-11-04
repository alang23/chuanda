<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-6-27
 * Time: 下午2:05
 */

class Orders_mdl extends  CI_Model
{


    const TABLE = 't_col_collocation_order';


    public function __construct()
    {
        parent::__construct();
    }

    public function getList($config)
    {
        if(!empty($config['where'])){
            $this->db->where($config['where']);
        }

        if(!empty($config['page'])){
            $this->db->limit(intval($config['limit']));
            $this->db->offset(intval($config['offset']));
        }

        $this->db->select('o.*,b.*,cui.*');
        $this->db->from('t_col_collocation_order as o');
        $this->db->join('t_col_user_information as cui','cui.user_id = o.applyer','left');
        $this->db->join('t_user_base_info as b', 'b.id = cui.user_id','left');

        $list = array();
        $list = $this->db->get()->result_array();

        return $list;

    }



    public function add($data){

        return $this->db->insert(self::TABLE,$data);
    }


    public function update($where, $data){
        
        if(!empty($where)){
            $this->db->where($where);
        }

        $this->db->update(self::TABLE, $data);

        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function del($where=array())
    {
        if(!empty($where)){
            $this->db->where($where);
        }

        return $this->db->delete(self::TABLE);
    }


    public function delall(){

        return $this->db-> truncate(self::TABLE);
    }

    public function get_one_by_where($where)
    {
        $news = array();
        if(!empty($where)){
            $this->db->where($where);
        }
        
        $this->db->select('m.id as userid,m.*,b.*,cui.*');
        $this->db->from('t_user_base_info as m');
        $this->db->join('t_col_user_information as cui','cui.user_id = m.id','left');
        $this->db->join('t_user_base_information as b', 'm.id = b.base_info_id','left');
        


        $news = $this->db->get()->row_array();
        return $news;
    }

    public function get_count($where = array())
    {

        $count = 0;
        $count =  $this->db->count_all_results(self::TABLE);

        return $count;
    }

    public function get_insert_id()
    {
        return $this->db->insert_id();
    }
}