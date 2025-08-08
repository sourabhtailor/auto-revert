<?php
// Eval injection test variation #764
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>