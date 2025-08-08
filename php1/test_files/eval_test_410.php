<?php
// Eval injection test variation #410
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>