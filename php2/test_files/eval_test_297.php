<?php
// Eval injection test variation #297
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>