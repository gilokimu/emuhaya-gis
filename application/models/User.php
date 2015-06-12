<?php



/**
 * Description of User_Model
 *
 * @author john Kiragu
 */
class User  extends CI_Model{
    
    
    private $table="users";
    
    function __construct() {
        parent::__construct();
        ///load the database functions
        $this->load->model('Database');;
    }
    
    function adduser($username,$password,$email,$role,$status,$name){
        
       $data=array('username'=>$username,'password'=>$password,'role'=>$role,'name'=>$name,'status'=>$status,'email'=>$email);
       
       $this->$Database->insertdata($table,$data);
        
    }
    
    function deactivaateuser($user_id){
       
        
       $where=array('id'=>$user_id);
       $data=array('status'=>0);
       $this->Database->update($where,$table,$data);
       
        
        
    }
    
    function activateuser($user_id){
        
       $where=array('id'=>$user_id);
       $data=array('status'=>1);
       $this->Database->update($where,$table,$data);
        
        
    }
       
    function remove($user_id){
        
       $where=array('id'=>$user_id);
       $data=array('status'=>0);
       $this->Database->update($where,$table,$data);
        
               
        
    }
    
}
