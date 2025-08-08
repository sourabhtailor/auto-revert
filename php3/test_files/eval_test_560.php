<?php
// Eval injection test variation #560
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>