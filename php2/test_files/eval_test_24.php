<?php
// Eval injection test variation #24
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>