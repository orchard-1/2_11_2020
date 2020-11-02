<?php
    # creating a abstract class
    abstract class sport{
        
        # creating a abstarct function child needs to over-ride
        abstract public function participate();

        # creating normal function child need not to override
        public function run(){
            echo "Action : Running \n";
        }

        # creating normal function child need not to override
        public function swim(){
            echo "Action : Swimming \n";
        }
    }

    # extending the abstaract class sport
    class swimming_competiton extends sport{
        
        # over-riding participate() from sport
        public function participate(){
            echo "paricipating in swimming competiton\n";
        }
        
        public function Location(){
            echo "London";
        }
    }

    # extending the abstaract class sport
    class marathon extends sport{
        public function participate(){
            echo "paricipating in Marathon\n";
        }
        public function cashPrice(){
            echo "Cash price is : 1Lakh";
        }

    }

    # driver block
    $swim_obj= new swimming_competiton();
    $maraton_obj=new marathon();

    $swim_obj->participate();
    $swim_obj->swim();
    echo "------------------------------\n";
    $maraton_obj->participate();
    $maraton_obj->run();
?>