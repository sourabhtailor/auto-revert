<?php
// Eval injection test variation #233
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>