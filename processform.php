<?php  


if (isset( $_POST['submit'])) {
    $FirstName = $_POST["first_name"];
    $LastName = $_POST["last_name"];
    $Email = $_POST["email"];
    $Department = $_POST["department"];
    $Gender = $_POST["gender"];
    $Text = $_POST["comment"];
    $Terms = $_POST["terms"];

    
    
    $filename = $FirstName . $LastName . '.txt';
    if (file_exists($filename)) {
        echo sprintf('file %s already exists ',$filename);
    }else {
        $file = fopen($filename, "a");
        fwrite($file, $FirstName . "\n");
        fwrite($file, $LastName . "\n");
        fwrite($file, $Email . "\n");
        fwrite($file, $Department . "\n");
        fwrite($file, $Gender . "\n");
        fwrite($file, $Text . "\n");
        fwrite($file, $Terms);
        fclose($file);
        echo sprintf("Form Submitted Succesfully");
    }    
     
}



?>