<?php
// Eval injection test variation #689
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>