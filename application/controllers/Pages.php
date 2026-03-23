<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit','2048M');
date_default_timezone_set('Asia/Manila');
    class Pages extends CI_Controller{
        public function index(){
            $page = "index";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                                          
            $this->load->view('pages/'.$page);                     
        }
//===============Admin Controller====================================
        public function admin(){
            $page = "index";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }                              
            if($this->session->admin_login){
                redirect(base_url('admin_main'));
            }
            $this->load->view('pages/admin/'.$page);                     
        }
        public function admin_authentication(){
            $user=$this->General_model->admin_authenticate();
            if($user){
                $userdata=array(
                    'username' => $user['username'],
                    'fullname' => $user['fullname'],
                    'admin_login' => true
                );
                $this->session->set_userdata($userdata);
                redirect(base_url('admin_main'));
            }else{
               $this->session->set_flashdata('remarks','Invalid username and password!');
               redirect(base_url('admin'));
            }
        }
        public function admin_logout(){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('fullname');
            $this->session->unset_userdata('admin_login');
            $this->session->set_flashdata('success','You successfully logged out!');
            redirect(base_url('admin'));
        }
        public function admin_main(){
            $page = "main";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }                              
            if($this->session->admin_login){
                
            }else{
                $this->session->set_flashdata('remarks','You are not logged in!');
                redirect(base_url('admin'));
            }
            $this->load->view('includes/header');
            $this->load->view('includes/admin/sidebar');
            $this->load->view('includes/admin/navbar');
            $this->load->view('pages/admin/'.$page); 
            $this->load->view('includes/admin/modal');
            $this->load->view('includes/footer');            
        }
        public function manage_plan_type(){
            $page = "plan_type";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }                              
            if($this->session->admin_login){
                
            }else{
                $this->session->set_flashdata('remarks','You are not logged in!');
                redirect(base_url('admin'));
            }
            $data['title'] = "Manage Plan Type";
            $data['items'] = $this->General_model->getAllPlanType();
            $this->load->view('includes/header');
            $this->load->view('includes/admin/sidebar');
            $this->load->view('includes/admin/navbar');
            $this->load->view('pages/admin/'.$page,$data); 
            $this->load->view('includes/admin/modal');
            $this->load->view('includes/footer');            
        }
        public function save_plan_type(){
            $save=$this->General_model->save_plan_type();
            if($save){
                $this->session->set_flashdata('success','Plan details successfully saved!');            
            }else{
                $this->session->set_flashdata('failed','Unable to save Plan details!');                
            }
            redirect(base_url('manage_plan_type'));
        }
        public function delete_plan_type($id){
            $save=$this->General_model->delete_plan_type($id);
            if($save){
                $this->session->set_flashdata('success','Plan details successfully deleted!');            
            }else{
                $this->session->set_flashdata('failed','Unable to delete Plan details!');                
            }
            redirect(base_url('manage_plan_type'));
        }

        public function manage_designation(){
            $page = "designation";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }                              
            if($this->session->admin_login){
                
            }else{
                $this->session->set_flashdata('remarks','You are not logged in!');
                redirect(base_url('admin'));
            }
            $data['title'] = "Manage Designation";
            $data['items'] = $this->General_model->getAllDesignation();
            $this->load->view('includes/header');
            $this->load->view('includes/admin/sidebar');
            $this->load->view('includes/admin/navbar');
            $this->load->view('pages/admin/'.$page,$data); 
            $this->load->view('includes/admin/modal');
            $this->load->view('includes/footer');            
        }
        public function save_designation(){
            $save=$this->General_model->save_designation();
            if($save){
                $this->session->set_flashdata('success','Designation details successfully saved!');            
            }else{
                $this->session->set_flashdata('failed','Unable to save designation details!');                
            }
            redirect(base_url('manage_designation'));
        }
        public function delete_designation($id){
            $save=$this->General_model->delete_designation($id);
            if($save){
                $this->session->set_flashdata('success','designation details successfully deleted!');            
            }else{
                $this->session->set_flashdata('failed','Unable to delete designation details!');                
            }
            redirect(base_url('manage_designation'));
        }
        public function manage_branch(){
            $page = "branch";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }                              
            if($this->session->admin_login){
                
            }else{
                $this->session->set_flashdata('remarks','You are not logged in!');
                redirect(base_url('admin'));
            }
            $data['title'] = "Manage Branch";
            $data['items'] = $this->General_model->getAllBranch();
            $this->load->view('includes/header');
            $this->load->view('includes/admin/sidebar');
            $this->load->view('includes/admin/navbar');
            $this->load->view('pages/admin/'.$page,$data); 
            $this->load->view('includes/admin/modal');
            $this->load->view('includes/footer');            
        }
        public function save_branch(){
            $save=$this->General_model->save_branch();
            if($save){
                $this->session->set_flashdata('success','Branch details successfully saved!');            
            }else{
                $this->session->set_flashdata('failed','Unable to save branch details!');                
            }
            redirect(base_url('manage_branch'));
        }
        public function delete_branch($id){
            $save=$this->General_model->delete_branch($id);
            if($save){
                $this->session->set_flashdata('success','Branch details successfully deleted!');            
            }else{
                $this->session->set_flashdata('failed','Unable to delete branch details!');                
            }
            redirect(base_url('manage_branch'));
        }
        public function manage_employee(){
            $page = "employee";
            if(!file_exists(APPPATH.'views/pages/admin/'.$page.".php")){
                show_404();
            }                              
            if($this->session->admin_login){
                
            }else{
                $this->session->set_flashdata('remarks','You are not logged in!');
                redirect(base_url('admin'));
            }
            $data['title'] = "Manage Employee";
            $data['items'] = $this->General_model->getAllEmployee();
            $this->load->view('includes/header');
            $this->load->view('includes/admin/sidebar');
            $this->load->view('includes/admin/navbar');
            $this->load->view('pages/admin/'.$page,$data); 
            $this->load->view('includes/admin/modal');
            $this->load->view('includes/footer');            
        }
        public function save_employee(){
            $save=$this->General_model->save_employee();
            if($save){
                $this->session->set_flashdata('success','Employee details successfully saved!');            
            }else{
                $this->session->set_flashdata('failed','Unable to save Employee details!');                
            }
            redirect(base_url('manage_employee'));
        }
        public function delete_employee($id){
            $save=$this->General_model->delete_employee($id);
            if($save){
                $this->session->set_flashdata('success','Employee details successfully deleted!');            
            }else{
                $this->session->set_flashdata('failed','Unable to delete Employee details!');                
            }
            redirect(base_url('manage_employee'));
        }
        public function fetch_single_employee(){
            $id=$this->input->post('id');
			$data=$this->General_model->fetch_single_employee($id);
			echo json_encode($data);
        }
        public function save_user_account(){
            $save=$this->General_model->save_user_account();
            if($save){
                $this->session->set_flashdata('success','User Account details successfully saved!');            
            }else{
                $this->session->set_flashdata('failed','Unable to save User Account details!');                
            }
            redirect(base_url('manage_employee'));
        }
//===============Admin Controller====================================
}
?>
