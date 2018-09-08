<?php
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM shares');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add() {
	    //Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($post['submit'])) {
            echo 'SUBMITTED';
        }
    }
}