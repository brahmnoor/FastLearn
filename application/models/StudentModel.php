<?php
class StudentModel extends CI_Model {
	public function _construct() {
		$this->load->database();
	}
	public function getSlugInfo($slug) {
		$query = $this->db->get_where('slugNoQues', array('slug' => $slug));
		return $query->row_array();
	}

	public function getQuestion($QNo) {
		$query = $this->db->get_where('questions', array('qno' => $QNo));
		return $query->row_array();
	}

	public function getChoices($QNo) {
		$query = $this->db->get_where('choices', array('qno' => $QNo));
		return $query->row_array();
	}

	public function sendStudentData() {
		$data = array(
            'username' => $this->input->post('usernameOfStudent'),
            'slug' => $this->input->post('slug'), 
            'numberOfCorrect' => $this->input->post('correctResponses')
			);
		return $this->db->insert('student', $data);
	}

}
?>
