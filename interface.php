<?php 
    # creating an interface
    interface chat_app{
        public function send_message($recepient,$message);
        public function receive_message($sender,$message);
    }

    # implementing the chatApp interface in whatsapp class
    class whatsapp implements chat_app{
        
        #implementing send_message function
        public function send_message($whatsapp_number,$message){
            echo "Sending Whatsapp Message : $message \nTo : $whatsapp_number";
        }

        #implementing receive_message function
        public function receive_message($sender,$message){
            echo "Received from : $sender\nMessage: $message";
        }
    }

    # implementing the chatApp interface in SMS class
    class SMS implements chat_app{

        #implementing send_message function
        public function send_message($mobile_number,$message){
            echo "Sending Message (SMS) : $message \nTo : $mobile_number";
        }

        #implementing receive_message function
        public function receive_message($sender,$message){
            echo "Received from (SMS) : $sender\nMessage: $message";
        }
    }

    # implementing the chatApp interface in Email class
    class Email implements chat_app{
        private $subject;

        # Additional function other than functions in inteface 
        public function get_subject(){
            $this->subject= readline("Enter subject of the mail : ");
            return $this->subject;
        }

        #implementing send_message function
        public function send_message($recepient_mail,$message){
            $this->subject=$this->get_subject();
            echo "Sending Message (Email) To : $recepient_mail";
            echo "\nSubject : $this->subject \nMessage :$message";
        }

        #implementing receive_message function
        public function receive_message($sender_mail,$message){
            echo "Received from (Email) : $sender_mail\nSubject : $this->subject\nMessage: $message";
        }
        
    }
    
    

    #creating objects of the classes
    $whatapp_obj=new whatsapp();
    $SMS_obj=new SMS();
    $Email_obj=new Email();
    echo "============== MESSAGING SYSYTEMS ===============\n";
    # accessing the methods from the classes 
    $whatapp_obj->send_message("7095790619","Hey...!");
    echo "\n---------------------------------------------------------\n";
    $whatapp_obj->receive_message("628156484","Hey...!");
    echo "\n====================================================\n";
    $SMS_obj->send_message("6281256484","Hii..!chinmaya");
    echo "\n---------------------------------------------------------\n";
    $SMS_obj->receive_message("7095790619","Hii..!chinmaya");
    echo "\n====================================================\n";
    $Email_obj->send_message("ganjichinmaya01@gmail.com","Dear chinmaya,\n\t please send the project status.");
    echo "\n---------------------------------------------------------\n";
    $Email_obj->receive_message("chinmaya@mindtree.com","Dear chinmaya, \n\t please send the project status.");


?>