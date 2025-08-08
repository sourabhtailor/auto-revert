<?php
// Eval injection test variation #428
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>