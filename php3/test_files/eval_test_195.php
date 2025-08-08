<?php
// Eval injection test variation #195
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>