<?php
class Quiz extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->model('StudentModel');
            $this->load->helper('url_helper');
    }

	public function index() {
		$data['title'] = "Something";
		// If data has to be passed
		$this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer', $data);
	}

	public function teacher() {
		$data['title'] = "Something";
		// If data has to be passed
		$this->load->view('templates/header', $data);
		$this->load->helper('form');
		$this->load->view('teacher', $data);
		$this->load->view('templates/footer', $data);
	}
	public function teacherFinalStep() {
		$data = array(
			'nameOfTeacher' => $this->input->post('nameOfTeacher'),
			'nameOfQuiz' => $this->input->post('nameOfQuiz')
			);
		$this->load->view('templates/header');
		$this->load->view('TeacherFinal', $data);
		$this->load->view('templates/footer');
	}

	public function teacherDoneInfo() {
		$data = array(
			'nameOfTeacher' => $this->input->post('nameOfTeacher'),
			'nameOfQuiz' => $this->input->post('nameOfQuiz'),
			'textToConvert' => $this->input->post('textToConvert'),
			'slug' => $this->input->post('slug'),
			'secretKey' => $this->input->post('secretKey')
			);
		$this->load->view('templates/header');
		$this->load->view('teacherDone', $data);
		// Maybe add a question verify system
		$this->load->view('templates/footer');
	}

	public function student() {
		$this->load->view('templates/header');
		$this->load->view('studentGetData');
		$this->load->view('templates/footer');
	}

	public function studentConfirmInput() {
		$data = array(
			'usernameOfStudent' => $this->input->post('usernameOfStudent'),
			'slug' => $this->input->post('slug')
			);
		$data['slugInfo'] = $this->StudentModel->getSlugInfo($data['slug']);
		$this->load->view('templates/header');
		$this->load->view('studentConfirm', $data);
		$this->load->view('templates/footer');
	}

	public function studentQuizSession() {
		$data = array(
			'nameOfQuiz' => $this->input->post('nameOfQuiz'),
			'nameOfTeacher' => $this->input->post('nameOfTeacher'),
			'slug' => $this->input->post('slug'), 
            'usernameOfStudent' => $this->input->post('usernameOfStudent'),
            'numberOfQuestionsLeft' => $this->input->post('numberOfQuestionsLeft'),
            'currentQno' => $this->input->post('currentQno')
			);
		$data['questionText'] = $this->StudentModel->getQuestion($data['currentQno']);
		$data['questionOptions'] = $this->StudentModel->getChoices($data['currentQno']);
		$this->load->view('templates/header');
		$this->load->view('studentQuiz', $data);
		$this->load->view('templates/footer');
	}

	public function finalResult() {
		$this->StudentModel->sendStudentData();
		$this->load->view('templates/header');
		$this->load->view('studentFinal');
		$this->load->view('templates/footer');
	}

}