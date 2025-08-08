<?php
// Eval injection test variation #736
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>