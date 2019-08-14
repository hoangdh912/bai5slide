<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slides_model');
	}

	public function index()
	{
		$this->load->view('addData_view');
	}

	public function addSlide()
	{
		// Get data from db where attr_name = slides_topbanner 
		$result = $this->slides_model->getData();
		// Decode json
		$result = json_decode($result, TRUE);
		if($result == NULL){
			$result = array();
		}
			
		// Upload file check
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
		    if($check !== false) {
		       // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		       // echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}

		// Get param from view
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		$slide_image = base_url() . 'uploads/' . basename($_FILES["slide_image"]["name"]);

		// Push new data to json by array_push
		$oneSlide = [
		    'title' => $title,
		    'description' => $description,
		    'button_link' => $button_link,
		    'button_text' => $button_text,
		    'slide_image' => $slide_image
		];

		array_push($result, $oneSlide);
		// json encode
		$result = json_encode($result);
		// update data
		$this->slides_model->updateData($result);
		header('Location: ' . base_url() . 'index.php/Slides');
	}
}

/* End of file slide.php */
/* Location: ./application/controllers/slide.php */