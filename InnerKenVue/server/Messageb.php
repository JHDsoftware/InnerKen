<?php
/**
 * Created by PhpStorm.
 * User: yhs
 * Date: 2018/5/27
 * Time: 下午4:20
 */
include_once ("item.php")
class MessageBoard extends DB{
    var $message=array();
    
    function _construct(){
        parent::_consruct();
        $this->receiveMessage();
        $this->LoadData();
        $this_>showAllmessage();
        $this->showForm();

    }
    function receiveMessage(){
        if(count($_POST)!=0){
            $this->savaData($_POST['userName'],date("Y-m-d h:i:s",time()),$_POST['content']);
        }





    }
    function savaData($u,$t,$c){
        $query = "INSERT INTO 'messages'('name','time','content')VALUE('".$u."','".$t."','".$c."');"; 
        mysql_query($query);

    }
    function loadData(){
            $query="SELECT * FROM 'messages';";
            array_psuh($this->message,$temp);
    }
    function showAllmessge(){
        foreach($this->message as $m){
        $m->show();
        }
    }
    function showForm(){
           echo "<form actioon=''method='POST'>";
           echo "Name:"."<input type='text' name='userName'>"."<br>";
           echo "Content:"."<input type='text' name='content'>"."<br>";
           echo "<input type = 'submit'>"."<br>";
           echo "</form>";
    }
}
?>