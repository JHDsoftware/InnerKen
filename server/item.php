<?php
  class Message{
       var $name;
        var $name;
       var $lastdate;
       var $content;
	   var $email;
	   var $password;
 
       function _construct($n,$p,$e,$d,$con){
           $this->name=$n;
           $this->lastdate=$d;
           $this->content=$con;
		   $this->password=$p;
		   $this->email=$e;
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
        if($this->database){
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
           $this->database=mysqli_close();
   } 
  }
	  
  ?>
