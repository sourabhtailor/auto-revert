<?php
// Eval injection test variation #589
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>