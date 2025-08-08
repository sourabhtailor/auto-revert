<?php
// Eval injection test variation #1091
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>