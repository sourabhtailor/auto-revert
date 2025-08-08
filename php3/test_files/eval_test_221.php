<?php
// Eval injection test variation #221
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>