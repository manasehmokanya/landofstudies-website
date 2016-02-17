<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home - Land Of Studies (LOS) Learning Platform</title>
        <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div>
            <?php
        include_once 'header.php';
        ?>
        </div>
        
        <?php
require_once 'configuration.php';
$new = new configuration();
echo $new->log_path."<br /> something is wrong somewhere <br />";
//echo $again;
if (version_compare(PHP_VERSION, '5.3.10', '<'))
{
	die('Your host needs to use PHP 5.3.10 or higher to run this version of LOS Learning Platform');
}
echo "hard to code when u are stress up ".PHP_VERSION;
?>
    </body>
</html>
