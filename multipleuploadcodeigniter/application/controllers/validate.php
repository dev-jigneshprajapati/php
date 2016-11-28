<?php

class validate extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('welcome_model');
    }

    function index()
	{
		$this->load->library('form_validation');
                
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_rules('username', 'Username', 'trim|required');

		$this->form_validation->set_rules('password', 'Password', 'trim|required',
				array('required' => 'You must provide a %s.')
		);

		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if (empty($_FILES['userfile']['name']))
		{
			$this->form_validation->set_rules('userfile', 'Document', 'trim|required');
		}

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('valform');
		}
		else
		{
			//echo "<pre>";
			//print_r($_POST);
			//print_r($_FILES);
			

			if (!empty($_FILES['userfile']['name']))
			{
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';     

				$this->upload->initialize($config);

				if ($this->upload->do_upload('userfile'))
				{
					$img = $this->upload->data();
					

					$arrayData = array(
						"image" => $img['file_name'],
						"username" => $this->input->post('username'),
						"password" => $this->input->post('password'),
						"email" => $this->input->post('email'),
						);

					$this->welcome_model->create_entry('signup',$arrayData);

					
					$this->load->view('valform');
				}
				else
				{
					echo $this->upload->display_errors();

				}
			}

		}
	}

	function check()
	{
		$arrayData = array(
			"username" => "jignesh",
		);

		$where = array(
			"id" => 3,
			);

		//$this->welcome_model->create_entry('signup',$arrayData);
		$this->welcome_model->update_entry('signup',$arrayData,$where);
		//$data = $this->welcome_model->delete_entry('signup',$where);
		//$data = $this->welcome_model->getAll('signup',$where);

	}

	function database()
	{
			$this->test = $this->load->database('test', TRUE);
			$data = $this->welcome_model->getAll('signup');
			echo "<pre>";
			print_r($data); 
	}

}

?>