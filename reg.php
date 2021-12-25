<?php
    $Firstname = $_POST['FirstName'];
    $Lastname = $_POST['LastName'];
    $Gender = $_POST['gender1'];
    $Email = $_POST['email'];
    $NIC = $_POST['nic'];
    $Phonenumber = $_POST['phonNumbr'];
    $Department = $_POST['department'];
    $Corse = $_POST['corse'];
    $PasswordN = $_POST['password'];
    //data base connection
    $conn = new mysqli("localhost","root","","registration");
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection failed : ". $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registationform (FirstName, LastName, gender1, email, nic, phonNumber, department, corse, password)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssisss",$Firstname, $Lastname, $Gender, $Email, $NIC, $Phonenumber, $Department, $Corse, $PasswordN   );
        $execval = $stmt->execute();
        echo $execval;
        echo "registation successfilly...";
        $stmt->close();
        $conn->close();
    }






    <div class="content">
    <div class="closs-botton" onclick="onclickBtn()">&times;</div>
    <p>Successfull Data Submitted</p>
    
</div>
</div>
<div class="popup" id="popup1"></div>
<script>
function onclickBtn(){
    document.getElementById("popup1").classList.toggle("active");
}
</script>
