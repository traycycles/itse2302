<h2 style="text-align: center">Requirement #6</h2>
<br/><br/>
Uploader
<br/>
<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/24/2016
 * Time: 8:35 PM
 */

if(isset ($_FILES['file'])) {
    $file = $_FILES['file'];
   // print_r($file);
    //echo "<br/>";
//file props
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_type = $file['type'];
    $file_error = $file['error'];

    //in order to get extension
$file_ext = explode(".", $file_name);
    //print_r($file_ext);
    $file_ext = strtolower(end($file_ext));

    if($file_ext == 'txt'){
        if($file_error === 0){
            if ($file_size <= 100000){
                $file_name_new = uniqid('', true).'.'. $file_ext;
                $file_destination = "files/".$file_name_new;
                if(move_uploaded_file($file_tmp, $file_destination)){
                    echo "File successfully uploaded to the 'files' directory.";
                }
            }else{
                echo 'Sorry. Filesize is too large.';
            }
        }else{
            echo 'File has an error.';
        }
    }else{
        echo 'Sorry. File is not the proper type.';
    }
}
?>
<br/><br/>
<a href="index.php" style="color: darkred; font-size: larger">Go Back</a>
