<?php
class ControllerCommonVisited extends Controller {
	public function index() {
        
        echo "vonvoicenfjenfoe";
     
        if (isset($this->session->data['user_id']))  { 
            $data['user_id'] = $this->session->data['user_id'];
        }
        else {
            $data['user_id'] = NULL;
        }
        
        $data['ip_adresse'] = $_SERVER['REMOTE_ADDR'];
        $data['title'] = $this->document->getTitle();
        $data['links'] = $_SERVER['REQUEST_URI'];

        $this->load->model('report/visited');

        $this->model_report_visited->addVisited($data['title'], $data['links'],$data['user_id'],$data['ip_adresse']);	
    
        
    }
}