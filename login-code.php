<?php
require 'config/function.php';
require 'config/dbcon.php';
if(isset($_POST['loginBtn']))
{
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

     // $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
      //$password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

    if($email != '' && $password != '')
    {
        // $query = "SELECT * FROM users WHERE email ='$email' AND password='$password' LIMIT 1 ";
        $query = "SELECT * FROM users WHERE email ='$email' AND password='$password' LIMIT 1 ";
        $result =mysqli_query($conn,$query);

        if($result)
        {
            if(mysqli_num_rows($result) ==1)
            {
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                if($row['role'] == 'admin')
                {
                    if($row['is_ban'] == 1){
                    redirect('login.php', 'Your account has been banned. Please contact admin');

                    }
                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'name' => $row['name'],
                        'email' => $row['email']
                    ];
                    redirect('admin/index.php', 'Logged In Successfully');

                }
                else{
                    if($row['is_ban'] == 1){
                        redirect('login.php', 'Your account has been banned. Please contact admin');
    
                        }
                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'name' => $row['name'],
                        'email' => $row['email']
                    ];
                    redirect('index.php', 'Logged In Successfully');

                }
            }
            else
            {
        redirect('login.php', 'Invalid Email Id or Password');

            }
        }
        else
        {
        redirect('login.php', 'Somthing Went Wrong');

        }
    } 
    else{
        redirect('login.php', 'All fields are mandetory');
    }
}
?>