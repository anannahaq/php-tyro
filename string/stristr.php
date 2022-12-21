<?php
  $email = 'USER@EXAMPLE.com';
  echo stristr($email, 'er'); // outputs ER@EXAMPLE.com
//   echo stristr($email, 'e', true); // outputs US
?>