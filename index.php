<?php
    // Variable setting

    $name = $_REQUEST['Name'];
    $email = $_REQUEST['Email'];
    $mobile = $_REQUEST['Mobile no'];
    $message = $_REQUEST['Message'];


    // check input field

    if(empty($name) || empty($email) || empty($mobile) || empty($message)){
        echo "Please Fill All The Black Area";
    }
    else{
        mail("sagarsi0202@gmail.com", "Technical First Website", $message, "From: $name <$email>");
        echo "<script type='text/javascript'>
                    alert('Your Messages Send sucessfully');
                    window.history.log(-1);
              </script>"
    }
?>