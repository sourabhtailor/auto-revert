<?php
// Eval injection test variation #227
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>