<?php
// Eval injection test variation #392
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>