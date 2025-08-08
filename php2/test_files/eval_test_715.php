<?php
// Eval injection test variation #715
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>