<?php
// Eval injection test variation #1306
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>