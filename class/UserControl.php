
<?php
class UserController extends UserModel{
    private $usn;
    private $option;
    private $others;

    public function __construct($usn, $option,$others){
        $this->usn = $usn;
        $this->option = $option;
        $this->others = $others;
    } 
    // validate empty user input
    public function EmptyUserLogin(){
        
        if($this->empty_Users() == false){
            
           header("Location:../index.php?error=INVALID_YOUMUSTFILLUPALL");
           exit();
        
        }
       
       $this->get_attendee($this->usn,$this->option,$this->others);
       //$this->recordLogin();

        }
    public function EmptyFacultyLogin(){
        if($this->empty_Users() == false){
            
            header("Location:../index.php?error=INVALID_YOUMUSTFILLUPALL");
            exit();
         
         }
         $this->get_faculty_attendee($this->usn,$this->option,$this->others);

    }
    // creating empty user input
    private function empty_Users(){
       
        if(empty($this->usn) || empty($this->option)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
        
    }
}