<?php
// Eval injection test variation #518
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>