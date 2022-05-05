<?php
include("databaseconnectivity.php");
if(isset($_POST['sub']))
{
    $nm=$_POST['nm'];
    $em=$_POST['em'];
    $cn=$_POST['cn'];
    $pass=$_POST['pass'];
    $re=$_POST['re'];
    $pattern='/^[a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\].)[a-z]{2,6}$/ix';
        if(empty($nm))
        {
            $msg="please fill the name";
        }
        if(empty($em))
        {
            $msg="please fill the email";
        }
        if(empty($cn))
        {
            $msg="please fill the contact";
        }
        if(empty($pass))
        {
            $msg="please fill the password";
        }
        if(empty($re))
        {
            $msg="please re enter the pass";
        }
        if(!preg_match($pattern,$email))
        {
            $msg6="please fill the correct form of the email"
        }
        else
            {
                $sql="insert into validation(name,email,contact,pass,repass) value('$nm','$em','$cn','$pass','$re')";
                $res=mysqli_query($con1,$sql);
                if($res!=0)
                {
                    echo"you have successfully registered";
                }
            }
    
}
?>
<html>
    <head></head>
    <body>
        <form method="POST">
            <p><?php if(isset($msg)) echo $msg;?></p>
            <p><?php if(isset($msg1)) echo $msg1;?></p>
            <p><?php if(isset($msg2)) echo $msg2;?></p>
            <p><?php if(isset($msg3)) echo $msg3;?></p>
            <p><?php if(isset($msg4)) echo $msg4;?></p>
            <p><?php if(isset($msg5)) echo $msg5;?></p>
            <p><?php if(isset($msg6)) echo $msg6;?></p>
            name:<input type="text" name="nm"/><br>
            email:<input type="email" name="em"/><br>
            contact:<input type="number" name="cn"/><br>
            Re Enter Password:<input type="text" name="re"/><br>
            <input type="submit" value="submit" name="sub"/><br>
        </form>
    </body>
</html>