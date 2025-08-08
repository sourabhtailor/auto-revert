<?php
// Eval injection test variation #776
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>