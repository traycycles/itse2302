<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: deeppink;
        }
    </style>
</head>
<body>
<h2 style="text-align: center; padding-bottom: 100px">Requirement #9</h2>

<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/18/2016
 * Time: 11:28 PM
 */
$nameErr = $emailErr = $websiteErr = '';
$name=$email=$website='';
if($_SERVER['REQUEST_METHOD']== 'POST') {    //checking whether form was submitted
    if(empty($_POST['name'])){
        $nameErr = 'Name is required';
    }else {
        $name = test_input($_POST['name']);
        if (!preg_match('/^[a-zA-z]*$/', $name)) {
            $nameErr = 'Only letters and white space allowed';
        }

    }
    if(empty($_POST['email'])){
        $emailErr = 'Email is required';
    }else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Invalid Email format';
        }
    }
    if (empty($_POST['website'])) {
        $websiteErr = 'Website is required';
    } else {
        $website = test_input($_POST['website']);
        //will work for general type www.xyz.com emails
        if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $website)) {
            $websiteErr = "Invalid URL";
        }
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<p><span class="error">* required field.</span> </p>
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div style="display: inline-block">
            Name:
            <input type="text" name="name" size="30" title="name is required" value="<?=$name?>" />
            <span class="error">*<?=$nameErr?></span>
        <br/><br>
            Email:
            <input type="text" name="email" size="30" title="email is required" value="<?=$email?>" />
            <span class="error">*<?=$emailErr?></span>
        <br/><br>
            Website:
            <input type="text" name="website" size="30" title="website is required" value="<?=$website?>" />
            <span class="error">*<?=$websiteErr?></span>
            <br/><br>
        <input type="submit" value="Submit" name="submit"> <br/><br/>

<h2>Your Input:</h2>
<?php
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
?>
<br/>
    <a href="index.php" style="text-decoration: none; color: crimson; font-size: larger">Go Back</a>
</body>
</html>
