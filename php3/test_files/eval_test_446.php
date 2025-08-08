<?php
// Eval injection test variation #446
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>