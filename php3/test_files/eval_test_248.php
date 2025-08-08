<?php
// Eval injection test variation #248
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>