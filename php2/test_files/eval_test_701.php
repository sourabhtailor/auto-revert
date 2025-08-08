<?php
// Eval injection test variation #701
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>