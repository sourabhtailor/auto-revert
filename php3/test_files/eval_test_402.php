<?php
// Eval injection test variation #402
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>