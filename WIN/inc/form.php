<?php

$firstName =  $_POST['firstName'];
$lastName =   $_POST['lastName'];
$email =      $_POST['email'];

if (isset($_POST['submit'])) {

   
    $errors = [
        'firstNameError' => '',
        'lastNameError' => '',
        'emailError' => '',

    ];



 

if(empty($firstName)){
    $errors['firstNameError'] = 'يرجى ادخال الاسم الاول';


                    }
                    if(empty($lastName)){
                        $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
                    
                    }

           
                    if(empty($email)){
                $errors['emailError'] = 'يرجى ادخال الايميل';
              

        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['emailError'] = 'يرجى ادخال ايميل صحيح';

           
}
        if (!array_filter($errors)){
            $firstName =  mysqli_real_escape_string($conn, $_POST['firstName']);
            $lastName =   mysqli_real_escape_string($conn, $_POST['lastName']);
            $email =      mysqli_real_escape_string($conn, $_POST['email']);

            $sql= "INSERT INTO users(firstName, lastName, email)
            VALUES ('$firstName', '$lastName', '$email')";
        
        if(mysqli_query($conn, $sql)){
            header('Location: ' . $_SERVER['PHP_SELF'] );
                    }else{
                     echo 'Error' . mysqli_error($conn);
                    }


        }
    }