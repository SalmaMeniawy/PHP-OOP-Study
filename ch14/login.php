<?php
 $db = new mysqli("localhost","bigbigfamily","php-study" ,"logins");
 //create unique identifire
 $id = uniqid(rand(),1);
 $_POST['email'] = "john(.doe)@exa//mple.com";
 //user's email address
 $address = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
 echo $address;
 $stmt = $db->prepare("UPDATE logins SET hash=? WHERE email=?");
 $stmt->bind_param('ss',$id,$address);
 $stmt->execute();
 $email =<<< email
Dear user
Click on the following link to reset your password:
http://www.example.com/users/lostpassword.php?id=$id 
email;
// Email user password reset options
mail($address,"Password recovery","$email","FROM:services@example.com");
echo "<p>Instructions regarding resetting your password have been sent to
$address</p>";


 $db->close();
?>
