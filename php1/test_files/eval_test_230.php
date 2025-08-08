<?php
// Eval injection test variation #230
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>