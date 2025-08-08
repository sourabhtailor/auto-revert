<?php
// Eval injection test variation #663
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>