<?php include('core/init.php'); ?>
<?php
    if (!empty($_POST['csrf'])) 
    {
        if (hash_equals($_SESSION['token'], $_POST['csrf'])) 
            {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $user = new User;

                if($user->login($username, $password))
                    {
                        redirect('index.php','You have been logged in.', 'success');
                    }
                else 
                    {
                        redirect('index.php','Invalid login', 'error');
                    }
            }
        else 
            {
                redirect('index.php');
            }
    }

?>