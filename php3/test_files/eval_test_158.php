<?php
// Eval injection test variation #158
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>