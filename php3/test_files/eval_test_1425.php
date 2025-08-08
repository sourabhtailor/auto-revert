<?php
// Eval injection test variation #1425
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>