<?php
// Eval injection test variation #510
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>