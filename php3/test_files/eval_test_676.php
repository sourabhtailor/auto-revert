<?php
// Eval injection test variation #676
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>