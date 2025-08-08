<?php
// Eval injection test variation #354
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>