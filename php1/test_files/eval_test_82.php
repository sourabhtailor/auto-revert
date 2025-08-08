<?php
// Eval injection test variation #82
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>