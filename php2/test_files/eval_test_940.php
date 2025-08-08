<?php
// Eval injection test variation #940
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>