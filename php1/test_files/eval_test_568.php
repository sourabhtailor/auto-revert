<?php
// Eval injection test variation #568
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>