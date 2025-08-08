<?php
// Eval injection test variation #151
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>