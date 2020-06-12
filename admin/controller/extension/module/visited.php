<?php
class ControllerExtensionModuleVisited extends Controller{
    
    public function index(){
		$this->load->language('extension/module/visited'); 
		$this->document->setTitle($this->language->get('heading_title')); 
		
		$data['instructions']= $this->language->get('text_instructions');
		$data['about']= $this->language->get('text_about');
		
		$data['breadcrumbs'] = array(); 
		$data['breadcrumbs'][] = array( 
			'text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true) 
			);
		
		$data['breadcrumbs'][] = array( 
			'text' => $this->language->get('text_extension'), 'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true) 
			);
		
		$data['breadcrumbs'][] = array( 
			'text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/module/visiteds', 'user_token=' . $this->session->data['user_token'], true) 
			);
		
		$data['cancel'] = $this->url->link('marketplace/visiteds', 'user_token=' . $this->session->data['user_token'] . '&type=module', true); 
		$data['header'] = $this->load->controller('common/header'); 
		$data['column_left'] = $this->load->controller('common/column_left'); 
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/module/visited', $data));
			
	}

    public function install()
    {
        $this->load->model('extension/module/visited');
        $this->model_extension_module_visited->createTable();

    }


    public function uninstall()
    {
        $this->load->model('extension/module/visited');
        $this->model_extension_module_visited->dropTable();
    }
}
