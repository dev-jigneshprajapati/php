<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function index()
    {
        $this->load->helper('xcrud');
        
        $xcrud = xcrud_get_instance();
        $xcrud->table('user');
        $xcrud->validation_required('name');
        $xcrud->validation_required('class');
//        $xcrud->validation_required(array('name' => 1, 'class' => 3));
        
        $xcrud->unset_print();
        $xcrud->unset_csv();
        $data['content'] = $xcrud->render();
        $this->load->view('welcome_message', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
