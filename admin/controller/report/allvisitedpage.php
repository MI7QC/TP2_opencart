<?php
class ControllerReportAllvisitedpage extends Controller {
	private $error = array();
	
	public function index() {

		$this->load->language('report/allvisitedpage');

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_visited_id'] = $this->language->get('text_visited_id');
        $data['text_url'] = $this->language->get('text_url');
        $data['text_title'] = $this->language->get('text_title');
        $data['text_ip_address'] = $this->language->get('text_ip_address');
        $data['text_user_id'] = $this->language->get('text_user_id');
       
		
		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('report/allvisitedpage');

		$data['breadcrumbs'] = array();

        // $data['breadcrumbs'][] = array(
        //     'text' => $this->language->get('text_home'),
        //     'href' => $this->url->link('common/dashboard&user_token=' . $this->session->data['user_token'])
        // );

        // $data['breadcrumbs'][] = array(
        //     'text' => $this->language->get('heading_title'),
        //     'href' => $this->url->link('common/dashboard&user_token=' . $this->session->data['user_token'])
        // );

        $all_visited = $this->model_report_allvisitedpage->getAllVisitedPage();
		
		$data['all_visited'] = array();
				$data['create'] = $this->url->link('news/news/create&user_token=' . $this->session->data['user_token']);
				foreach ($all_visited as $visited) {
					//array dans un array
					$data['all_visited'][] = array(
						'visited_id' => $visited['visited_id'],
						'url' => $visited['url'],
						'title' => $visited['title'],
						'date' => $visited['date'],
						'ip_address' => $visited['ip_address'],
						'user_id' => $visited['user_id']
					);
				}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('report/allvisitedpage', $data));
	}	
}