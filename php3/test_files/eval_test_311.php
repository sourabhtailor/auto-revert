<?php
// Eval injection test variation #311
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>