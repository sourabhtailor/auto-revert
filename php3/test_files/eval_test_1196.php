<?php
// Eval injection test variation #1196
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>