<?php
// Eval injection test variation #1063
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>