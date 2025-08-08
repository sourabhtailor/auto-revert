<?php
// Eval injection test variation #137
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>