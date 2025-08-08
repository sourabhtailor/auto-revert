<?php
// Eval injection test variation #389
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>