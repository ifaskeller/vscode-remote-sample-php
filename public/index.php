<?php
phpinfo();
function say($what)
{
    echo $what;
}

?>

<html>
<head>
    <title>Hello from Container</title>
</head>
<body>
    <?php say("Hello from here " . php_uname("r")); ?>
</body>
</html>
