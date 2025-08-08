<?php
// Eval injection test variation #249
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>