<?php
// Eval injection test variation #1246
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>