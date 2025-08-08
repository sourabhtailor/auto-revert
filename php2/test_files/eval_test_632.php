<?php
// Eval injection test variation #632
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>