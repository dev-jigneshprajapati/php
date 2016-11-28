<?php
class Welcome_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function upload_image($inputdata,$filename)
	{
	  $this->db->insert('user', $inputdata); 
	  $insert_id = $this->db->insert_id();

	  if($filename!='' ){
	  $filename1 = explode(',',$filename);
	  foreach($filename1 as $file){
	  $file_data = array(
	  'image' => $file,
	  'user_id' => $insert_id
	  );
	  $this->db->insert('photos', $file_data);
	  }
	  }
	}

	public function view_data(){
        $query=$this->db->query("SELECT ud.*,
                                 photo.*
                                 FROM user ud 
                                 RIGHT JOIN photos as photo
				 ON ud.u_id = photo.user_id 
                                 ORDER BY ud.u_id DESC");
        return $query->result_array();
    }

	public function deleteData($id)
	{
		$this->db->query("DELETE FROM user WHERE u_id = $id");
		$this->db->query("DELETE FROM photos WHERE user_id = $id");
	}

    public function edit_data($id){
        $query=$this->db->query("SELECT ud.*
                                 FROM user ud 
                                 WHERE ud.u_id = $id");
        return $query->result_array();
    }

    public function edit_data_image($id){
        $query=$this->db->query("SELECT photo.*
                                 FROM user ud 
                                 RIGHT JOIN photos as photo
								 ON ud.u_id = photo.user_id 
                                 WHERE ud.u_id = $id");
        return $query->result_array();
    }

    public function edit_upload_image($user_id,$inputdata,$filename ='')
	{
            
            $this->db->query("DELETE FROM photos WHERE user_id = $user_id");
        
            $data = array('name' => $inputdata['name'],
                        'class' => $inputdata['class']);
	    $this->db->where('u_id', $user_id);
	    $this->db->update('user', $data);

            if($filename!='' ){
                $filename1 = explode(',',$filename);
                foreach($filename1 as $file){
                    $file_data = array(
                        'image' => $file,
                        'user_id' => $user_id
                    );
                    $this->db->insert('photos', $file_data);
                }
            }
	}
	

	public function create_entry($tbl, $inputdata)
	{
		$this->db->insert($tbl, $inputdata);
		$insert_id = $this->db->insert_id();
	}

	public function update_entry($tbl, $updateDate, $where )
	{
		$this->db->update($tbl, $updateDate, $where);
		return 1;
	}

	public function delete_entry($tbl, $where)
	{
		$this->db->delete($tbl, $where); 
		return 1;
	}

	public function getAll($tbl, $where=array(), $column = "*")
	{
		$this->db->select($column);
		return $this->db->get($tbl,$where)->result_array();
	}
}