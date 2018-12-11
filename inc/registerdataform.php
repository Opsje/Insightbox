<?php

$siteOwnersEmail = 'moritz@insightbox.org';


if($_POST) {

    $name = trim(stripslashes($_POST['fullnameid']));
    $email = trim(stripslashes($_POST['emailid']));
    $subject1 = trim(stripslashes($_POST['choice1']));
    $subject2 = trim(stripslashes($_POST['choice2']));
    $subject3 = trim(stripslashes($_POST['choice3']));
    $gender1 = trim(stripslashes($_POST['rb1']));
    $gender2 = trim(stripslashes($_POST['rb2']));
    $gender3 = trim(stripslashes($_POST['rb3']));
    $language = trim(stripslashes($_POST['languageselected']));
    $topics = trim(stripslashes($_POST[countries.join(", ")]));
    $bookquantity = trim(stripslashes($_POST['option3']));
    $adress = trim(stripslashes($_POST['adress']));
    $city = trim(stripslashes($_POST['city']));
    $language = trim(stripslashes($_POST['whatcountry']));
    $zipcode = trim(stripslashes($_POST['postnumberid']));
    
    
    
    

    // Check Name
    if (strlen($name) < 2) {
        $error['name'] = "Please enter your name.";
    }
    // Check Email
    if (!preg_match('/^[a-z0-9&\'\.\-_\+]+[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
        $error['email'] = "Please enter a valid email address.";
    }
    // Check Message
    if (strlen($adress) < 1) {
        $error['message'] = "Please enter your adress.";
    }
    if (strlen($city) < 1) {
        $error['message'] = "Please enter your city.";
    }
    if (strlen($zipcode) > 6) {
        $error['message'] = "Please enter valid zipcode.";
    }
    


    // Set Message
    $message .= "Email from: " . $name . "<br />";
    $message .= "Email address: " . $email . "<br />";
    $message .= "Topics: " . $topics . "<br />";
    $message .= "Address: " . $adress . "<br />";
    $message .= "City: " . $city . "<br />";
    $message .= "Zipcode: " . $zipcode . "<br />";
    $message .= "Language: " . $language . "<br />";
    $message .= "Booktype: " . $subject1 . . $subject2 . . $subject3 ."<br />";
    $message .= "Gender: " . $gender1 . . $gender2 . . $gender3 ."<br />";
    $message .= "Booksquantity: <br />";
    $message .= $bookquantity;
    $message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";

    // Set From: header
    $from =  $name . " <" . $email . ">";

    // Email Headers
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    if (!$error) {

        ini_set("sendmail_from", $siteOwnersEmail); // for windows server
        $mail = mail($siteOwnersEmail, $subject, $message, $headers);

        if ($mail) { echo "OK"; }
        else { echo "Something went wrong. Please try again."; }
        
    } # end if - no validation error

    else {

        $response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
        $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
        $response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
        
        echo $response;

    } # end if - there was a validation error

}

?>