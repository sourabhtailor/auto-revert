<?php
// Eval injection test variation #223
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>