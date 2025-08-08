<?php
// Eval injection test variation #685
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>