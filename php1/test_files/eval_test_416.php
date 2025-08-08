<?php
// Eval injection test variation #416
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>