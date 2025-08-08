<?php
// Eval injection test variation #958
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>