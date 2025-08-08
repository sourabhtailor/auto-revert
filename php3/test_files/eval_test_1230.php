<?php
// Eval injection test variation #1230
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>