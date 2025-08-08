<?php
// Eval injection test variation #304
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>