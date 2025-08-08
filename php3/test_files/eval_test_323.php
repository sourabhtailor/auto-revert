<?php
// Eval injection test variation #323
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>