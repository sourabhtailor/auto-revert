<?php
// Eval injection test variation #182
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>