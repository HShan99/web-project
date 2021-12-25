<?php
$userName = $_POST['username'];
$password = $_POST['password'];
if($userName== 'myadmin' && $password == 'myadmin123'){
    echo("<script>window.location='home2.html' </script>");
}
else{
    echo ("<script> alert('Invalid User Name Or Password');window.location='signIN.html'</script>"); 
}









?>