<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tscrud
{
	var $CI;

  public function __construct()
  {
  	$this->CI = & get_instance();
	}	

	public function save($param = array())
	{
		$table  = $param['table'];
		$where  = $param['where'];
		$proses = $param['proses'];

		$aData  = array();

		$aField = $this->CI->db->field_data($table);
		foreach ($aField as $field)
		{
			if(isset($_POST[$field->name])){
				$vfield = $_POST[$field->name];
				if(($field->type == 'date') and ($vfield == '-' or empty($vfield)))
					$vfield = NULL;
				if(($field->type == 'text') and ($vfield ==  '' or empty($vfield)))
					$vfield = NULL;
				if(is_array($vfield))
					$vfield = implode(',', $vfield);

		   		$aData[$field->name] = $vfield;
		   	}
		}
		$orig_db_debug = $this->CI->db->db_debug; //catat status debug
		$this->CI->db->db_debug = FALSE; //ubah debug ke false

		$aError = array('success'=> true, 'message'=> 'Data sudah disimpan');

		$this->CI->db->where($where);
		if($proses=='new'){
			$result = $this->CI->db->insert($table, $aData);
		}
		if($proses=='edit'){
			$result = $this->CI->db->update($table, $aData);
		}
		if($proses=='delet'){
			$result = $this->CI->db->delete($table);
			$aError['message'] = "Data sudah dihapus";
		}

		if(!$result)
		{
			$dbError = $this->CI->db->error();
			$aError['success'] = false;
			$aError['message'] = $dbError['message'];
		}
		
		$this->CI->db->db_debug = $orig_db_debug; //kembalikan nilai debug lagi

		return $aError;
	}

	// $param = array('table'=>'','field'=>'*', 'where'=>'', 'order'=>'', 'limit'=>0, 'offset'=>0)
	function get($param = array())	
	{	
		$aData  = array('success'=> false, 'message'=> 'Error...', 'rows'=>array());
		if($param)
		{	
			if(isset($param['table']))
			{
				$this->CI->db->select($param['field']);
				if($param['where']!==''){
					$this->CI->db->where($param['where']);					
				}				
				if($param['order']!==''){
					$this->CI->db->order_by($param['order']);
				}
				$limit = $param['limit'];
				if($param['limit']!==0){
					$this->CI->db->limit($param['limit']);
				}
				if($param['offset']!==0){
					$this->CI->db->limit($param['limit'], $param['offset']);
				}
				$result = $this->CI->db->get($param['table']);

				if($result)
				{
					$aData['message'] = 'Data tidak ada';
					if($result->num_rows()>0){
						$aData['success'] = true;
						$aData['message'] = 'Data ada';
						$aData['rows'] = $result->result_array();
					}
				}
			}
		}

		return $aData;
	}

	public function select($sql='')
	{
		$aData = array(
			'success'=>false,
			'message'=>'Data tidak ada',
			'rows'=>array(),
		);
		if($result=$this->CI->db->query($sql))
		{
			if($result->num_rows()>0) 
			{
				$aData = array(
					'success'=>true,
					'message'=>'Data ada',
					'rows'=>$result->result_array(),
				);
			}
		}
		return $aData;
	}
}
