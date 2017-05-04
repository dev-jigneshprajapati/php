<?php

//CREATE TABLE IF NOT EXISTS `user_data` (`id` INT(11) NOT NULL, `username` VARCHAR(250) NOT NULL, `email` VARCHAR(250) NOT NULL,  `sex` VARCHAR(150) NOT NULL,  `address` VARCHAR(250) NOT NULL,  `created_date` DATETIME NOT NULL,  `status` ENUM('Y','N') NOT NULL DEFAULT 'Y' ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
//ALTER TABLE `user_data` ADD PRIMARY KEY (`id`);
//ALTER TABLE `user_data` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;

class Welcome_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   /**************************  START INSERT QUERY ***************/
    public function insert_data($data){
        $this->db->insert('user_data', $data); 
        return TRUE;
    }
    /**************************  END INSERT QUERY ****************/

    
    /*************  START SELECT or VIEW ALL QUERY ***************/
    public function view_data(){
        $query=$this->db->query("SELECT *
                            FROM `employees`
                            ORDER BY `employees`.`Name` ASC ");
		return $query->result_array();
    }
    /***************  END SELECT or VIEW ALL QUERY ***************/

    
    /*************  START EDIT PARTICULER DATA QUERY *************/
    public function edit_data($id){
        $query=$this->db->query("SELECT ud.*
                                    FROM user_data ud 
                                    WHERE ud.id = $id");
		return $query->result_array();
    }
    /*************  END EDIT PARTICULER DATA QUERY ***************/

}