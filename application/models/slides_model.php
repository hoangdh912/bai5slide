<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slides_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->where('attr_name', 'slides_topbanner');
		$data = $this->db->get('homepageattr', 1);
		$data = $data->result_array();
		foreach ($data as $value) {
			$getData = $value['attr_value'];
		}

		return $getData;
	}

	public function updateData($getData)
	{	
		//Get data to update
		$dataArray = [
		    'attr_name' => 'slides_topbanner',
		    'attr_value' => $getData
		];
		$this->db->where('attr_name', 'slides_topbanner');
		return $this->db->update('homepageattr', $dataArray);
	}
}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */