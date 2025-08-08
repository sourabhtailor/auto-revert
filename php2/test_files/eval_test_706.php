<?php
// Eval injection test variation #706
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>