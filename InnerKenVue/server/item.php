<?php
  class Message{
       var $name;
       var $time;
       var $content;

       function _construct($n,$t,$con){
           $this->name=$n;
           $this->time=$t;
           $this->content=$con;
       }
       function show(){
           echo "Name:".$this->name."<br>";
           echo "Time:".$this->time."<br>";
           echo "Content:".$this->content."<br>";
           echo "=============================="."<br>";
       }
  }
  class DB{
    var $database = null;
    function _construct(){
        $dbhost="localhost";
        $account="root";
        $password="";
        $this->database=mysqli_connect($dbhost,$account, $password);
        if(this->$this->database){
            echo "connected";
        }else{
            echo"data connect failed";
        }
        $result=mysqli_select_db("messages",$this->database);
        if($result){
            echo "connection succeded";
        }else{
            echo"failed";
        }
    }
    function _desturct(){
           $this->database=mysqli_close()
    }
    
    
    } 
  ?>
