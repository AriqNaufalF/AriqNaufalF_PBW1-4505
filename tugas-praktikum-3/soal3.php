<?php
$str = 'My Password';
$user = 'username';

echo sprintf("The md5 hashed password of %s is = %s\n", $str, md5($str . $user));
echo '<br>';
echo sprintf("The sh1 hashed password of %s is = %s\n", $str, sha1($str . $user));
echo '<br>';
echo sprintf("The snefru hashed password of %s is = %s\n", $str, hash('snefru', $str . $user));
