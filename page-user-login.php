<?php
$username=$_POST['username'];
$password=$_POST['password'];

if(isset($_POST['submit']))
{
    if(!empty($username) && !empty($password))
    {
        if($username=="inte2044" && $password=="Binh")
        {
            header(location: index.html);
        }
        else{
            echo "Please enter correct username and password";
        }
    }
    else{
        echo "please fill all fields";
    }
}
?>