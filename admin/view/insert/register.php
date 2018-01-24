<?php
include('../../controller/controller.php');
$con= new Controller();
?>
<form method="post">
	Name:<input type="text" name="name"><br>
	E-mail:<input type="text" name="email"><br>
	Password:<input type="password" name="password"><br>
	Address:<input type="text" name="address"><br>
	Phonenumber:<input type="text" name="phonenum"><br>
	Level:<input type="radio" name="level" value="SEE">SEE
	     <input type="radio" name="level" value="+2">+2
	     <input type="radio" name="level" value="diploma">Diploma
	     <input type="radio" name="level" value="bachelore">Bachelore
	     <input type="radio" name="level" value="masters">Masters<br>
	Profession:<input type="radio" name="profession" value="student">Student
	      <input type="radio" name="profession" value="others">Others<br>
	    <input type="submit" name="submit" value="Submit" class="btn btn-md btn-success">         
</form>
<?php

if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $data=$_POST;
    $con->insertRow('tbl_register',$data);

}
?>