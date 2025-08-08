<?php
// Eval injection test variation #829
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>