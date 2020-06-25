<?php
class ControllerReportTopfifteen extends Controller {
	private $error = array();
	
	public function index() {
		$this->load->language('report/topfifteen');

		$data['heading_title'] = $this->language->get('heading_title');
        $data['text_url'] = $this->language->get('text_url');
        $data['text_title'] = $this->language->get('text_title');
		
		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('report/topfifteen');

		$topFifteen = $this->model_report_topfifteen->getTopFifteen();

		$data['topFifteen'] = array();
				foreach ($topFifteen as $visited) {
					//array dans un array
					$data['topFifteen'][] = array(
						'url' => $visited['url'],
						'title' => $visited['title'],
						'nb_visite' => $visited['nb_visite']
					);
				}

        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('report/topfifteen', $data));
	}
}