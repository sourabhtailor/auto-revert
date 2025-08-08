<?php
// Eval injection test variation #836
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>