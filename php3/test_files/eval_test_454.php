<?php
// Eval injection test variation #454
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>