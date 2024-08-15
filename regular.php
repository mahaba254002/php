//preg_match($pattern, $subject, $matches)
<?php
function validateEmail($email) {
    return preg_match("/^[a-z]{2,}[a-z0-9]*@gmail\.com$/", $email);
}

// Example usage
$email = "mahaba@gmail.com";
if (validateEmail($email)) {
    echo "Valid email address.\n";
} else {
    echo "Invalid email address. Please use a gmail.com email.\n";
}

if(preg_match("/^Hello/","Hello Janice!")){
    echo "Match found\n";
}
else{
    echo "No such word";
}
?>
