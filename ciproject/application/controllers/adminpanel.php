<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(-1);
ini_set('display_errors', 1);

class Adminpanel extends CI_Controller {
    
    function __construct()
    {
            parent::__construct();
            session_check();  // check user loggin or not
            //load the excel library
            $this->load->library('excel');

    }
    public function index()
    {
        $data['title'] = $this->uri->segment(1);
        $data['user'] = $this->session->userdata('username');
        
        $this->load->view('header',$data);
        $this->load->view('admin/index');
        $this->load->view('footer');
    }
    
    public function uploadExcelFile() {
        if(isset($_FILES['file']) && $_FILES['file']['error'] != 4){
            $errors= array();
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_tmp  = $_FILES['file']['tmp_name'];
            $file_type = $_FILES['file']['type'];
            $file_ext = strtolower(end(explode('.',$_FILES['file']['name'])));
            
        }else{
            $filename = 'uploads/report.xlsx';
//            $filename = 'uploads/demofile.csv';
//            $filename = 'uploads/jignesh_prajapati.xls';
            $objPHPExcel = PHPExcel_IOFactory::load($filename);
            
            //get only the Cell Collection
            $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
            //extract to a PHP readable array format
            foreach ($cell_collection as $cell) {
                $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
                $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
                $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
                //header will/should be in row 1 only. of course this can be modified to suit your need.
                if ($row == 1) {
                    $header[$row][$column] = $data_value;
                } else {
                    $arr_data[$row][$column] = $data_value;
                }
            }
            //send the data in an array format
            $data['header'] = $header;
            $data['values'] = $arr_data;
            echo "<pre>";
            print_r($data);
        }
        
    } 
    
}
