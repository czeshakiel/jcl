<?php
    date_default_timezone_set('Asia/Manila');
    class General_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }        

        //================Authenticate========================
        public function admin_authenticate(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $result=$this->db->query("SELECT * FROM `admin` WHERE username='$username' AND `password`='$password'");
            if($result->num_rows() > 0){
                return $result->row_array();
            }else{
                return false;
            }
        }
        public function getAllPlanType(){
            $result=$this->db->query("SELECT * FROM plan_type ORDER BY `description` ASC");
            return $result->result_array();
        }
        public function save_plan_type(){
            $id=$this->input->post('id');
            $description=$this->input->post('description');
            $amount=$this->input->post('amount');
            $check=$this->db->query("SELECT * FROM plan_type WHERE `description`='$description' AND id <> '$id'");
            if($check->num_rows() > 0){
                return false;
            }else{
                if($id==""){
                    $result=$this->db->query("INSERT INTO plan_type(`description`,amount) VALUES('$description','$amount')");
                }else{

                    $result=$this->db->query("UPDATE plan_type SET `description`='$description',amount='$amount' WHERE id='$id'");
                }
                if($result){
                    return true;
                }else{
                    return false;
                }
            }            
        }
        public function delete_plan_type($id){
            $result=$this->db->query("DELETE FROM plan_type WHERE id='$id'");
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function getAllDesignation(){
            $result=$this->db->query("SELECT * FROM designation ORDER BY `description` ASC");
            return $result->result_array();
        }
        public function save_designation(){
            $id=$this->input->post('id');
            $description=$this->input->post('description');            
            $check=$this->db->query("SELECT * FROM designation WHERE `description`='$description' AND id <> '$id'");
            if($check->num_rows() > 0){
                return false;
            }else{
                if($id==""){
                    $result=$this->db->query("INSERT INTO designation(`description`) VALUES('$description')");
                }else{
                    $result=$this->db->query("UPDATE designation SET `description`='$description' WHERE id='$id'");
                }
                if($result){
                    return true;
                }else{
                    return false;
                }
            }            
        }
        public function delete_designation($id){
            $result=$this->db->query("DELETE FROM designation WHERE id='$id'");
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function getAllBranch(){
            $result=$this->db->query("SELECT * FROM branch ORDER BY `description` ASC");
            return $result->result_array();
        }
        public function save_branch(){
            $id=$this->input->post('id');
            $description=$this->input->post('description');            
            $check=$this->db->query("SELECT * FROM branch WHERE `description`='$description' AND id <> '$id'");
            if($check->num_rows() > 0){
                return false;
            }else{
                if($id==""){
                    $result=$this->db->query("INSERT INTO branch(`description`) VALUES('$description')");
                }else{
                    $result=$this->db->query("UPDATE branch SET `description`='$description' WHERE id='$id'");
                }
                if($result){
                    return true;
                }else{
                    return false;
                }
            }            
        }
        public function delete_branch($id){
            $result=$this->db->query("DELETE FROM branch WHERE id='$id'");
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function getAllEmployee(){
            $result=$this->db->query("SELECT e.*,d.description as position,b.description as branch FROM employee e LEFT JOIN designation d ON d.id=e.designation LEFT JOIN branch b ON b.id=e.branch ORDER BY b.description ASC, e.lastname ASC");
            return $result->result_array();
        }
        public function save_employee(){
            $id=$this->input->post('id');
            $lastname=$this->input->post('lastname');
            $firstname=$this->input->post('firstname');
            $middlename=$this->input->post('middlename');
            $suffix=$this->input->post('suffix');
            $designation=$this->input->post('designation');
            $birthdate=$this->input->post('birthdate');
            $gender=$this->input->post('gender');
            $date_employed=$this->input->post('date_employed');
            $branch=$this->input->post('branch');
            $status=$this->input->post('status');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $check=$this->db->query("SELECT * FROM employee WHERE `lastname`='$lastname' AND `firstname`='$firstname' AND middlename='$middlename' AND birthdate='$birthdate' AND id <> '$id'");
            if($check->num_rows() > 0){
                return false;
            }else{
                if($id==""){
                    $result=$this->db->query("INSERT INTO employee(lastname,firstname,middlename,suffix,designation,birthdate,gender,date_employed,branch,`status`,datearray,timearray) VALUES('$lastname','$firstname','$middlename','$suffix','$designation','$birthdate','$gender','$date_employed','$branch','$status','$date','$time')");
                }else{
                    $result=$this->db->query("UPDATE employee SET lastname='$lastname',firstname='$firstname',middlename='$middlename',suffix='$suffix',designation='$designation',birthdate='$birthdate',gender='$gender',date_employed='$date_employed',branch='$branch',`status`='$status',datearray='$date',timearray='$time' WHERE id='$id'");
                }
                if($result){
                    return true;
                }else{
                    return false;
                }
            }            
        }
        public function delete_employee($id){
            $result=$this->db->query("DELETE FROM employee WHERE id='$id'");
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function fetch_single_employee($id){
            $result=$this->db->query("SELECT * FROM employee WHERE id='$id'");
            return $result->result_array();
        }
        public function save_user_account(){
            $id=$this->input->post('id');
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $check=$this->db->query("SELECT * FROM employee WHERE username='$username' AND id <> '$id'");
            if($check->num_rows()>0){
                return false;                
            }else{
                $result=$this->db->query("UPDATE employee SET username='$username',`password`='$password' WHERE id='$id'");
                if($result){
                    return true;
                }else{
                    return false;
                }
            }
        }
        //================Authenticate========================
    }
?>