<?php
class ControllerReportTopfifteen extends Controller {
	private $error = array();
	
	public function index() {
		$this->load->language('report/topfifteen');

		$this->document->setTitle($this->language->get('heading_title'));

		// $this->load->model('report/topfifteen');


        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('report/topfifteen', $data));
	}
}