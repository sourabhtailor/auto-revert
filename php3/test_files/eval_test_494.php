<?php
// Eval injection test variation #494
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>