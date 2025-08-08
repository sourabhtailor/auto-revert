<?php
// Eval injection test variation #457
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>