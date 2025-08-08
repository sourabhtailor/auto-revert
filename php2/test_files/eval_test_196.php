<?php
// Eval injection test variation #196
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>