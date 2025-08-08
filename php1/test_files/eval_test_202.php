<?php
// Eval injection test variation #202
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>