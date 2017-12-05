<?php
$email = 'adfasdfas@asdfjla.com';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email is not valid" . PHP_EOL;
} else {
    echo "Email is valid" . PHP_EOL;
}
if (filter_var('уникум@из.рф', FILTER_VALIDATE_EMAIL)) {
    echo 'VALID' . PHP_EOL;
} else {
    echo 'NOT VALID' . PHP_EOL;
}

$email = "862275679@qq.com";
$int = preg_match('/^[\w\-\.]+@[\w\-]+(\.\w+)+$/', $email);
echo $int . PHP_EOL;
