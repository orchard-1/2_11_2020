<?php 
    # creating an interface
    interface chat_app{
        public function send_message($recepient,$message);
        public function receive_message($sender,$message);
    }

    # implementing the chatApp interface
    class whatsapp implements chat_app{
        #implementing send_message function
        public function send_message($whatsapp_number,$message){
            echo "Sending Whatsapp Message : $message to $whatsapp_number";
        }
        #implementing receive_message function
        public function receive_message($sender,$message){
            echo "Received from : $sender\nMessage: $message";
        }
    }

    # implementing the chatApp interface
    class SMS implements chat_app{
        #implementing send_message function
        public function send_message($mobile_number,$message){
            echo "Sending Message (SMS) : $message to $mobile_number";
        }
        #implementing receive_message function
        public function receive_message($sender,$message){
            echo "Received from (SMS) : $sender\nMessage: $message";
        }
    }

    #creating objects of both classes
    $whatapp_obj=new whatsapp();
    $SMS_obj=new SMS();
    echo "============== MESSAGING SYSYTEMS ===============\n";
    # accessing the methods from the classes 
    $whatapp_obj->send_message("7095790619","Hey...!");
    echo "\n";
    $whatapp_obj->receive_message("628156484","Hey...!");
    echo "\n====================================================\n";
    $SMS_obj->send_message("6281256484","Hii..!chinmaya");
    echo "\n";
    $SMS_obj->receive_message("7095790619","Hii..!chinmaya");


?>