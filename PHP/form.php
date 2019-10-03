<?php
// Init my errors
$formErrors = [
    'email' => '',
    'name' => '',
    'message' => ''
];
// Init a validation answer
<<<<<<< HEAD
$hidden ="";

$formcomplete = '';

$validationForm=false;
=======
$completeForm = '';
>>>>>>> 572901f686aeb745357c35e45e684a074a514c87

//If I submit my form
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    //We affect all the POST datas we get with the form
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    // test email
    switch($email){
        case null :
            $formErrors['email'] = '<small>please enter your email</small>';
            break;
        case !filter_var($email, FILTER_VALIDATE_EMAIL) :
            $formErrors['email'] = '<small>Please enter a valid email</small>';
            break;
        default :
            $formErrors['email'] = '';
            break;
    }

    // test Name
    if( empty($name) ){
        $formErrors['name'] = '<small>please enter your name</small>';
    } else {
        $formErrors['lastName'] = '';
    }

    // test message
    if( empty( $message ) ){
        $formErrors['message'] = '<small>please leave us a message</small>';
    } else {
        $formErrors['message'] = '';
    }
    //If the validation form pass all the errors
    if( '' == $formErrors['email'] && '' ==  $formErrors['name'] && '' == $formErrors['message'] ){
        $validationForm = true;
        $formcomplete = '<p>Thank you Wilder for contacting us, we will examine your request as soon as possible !</p>';
     $hidden = "class= 'hidden'";
    }
    $completForm = '<div>Thank you Wilder for contacting us, we will examine your request as soon as possible !</div>';
}
