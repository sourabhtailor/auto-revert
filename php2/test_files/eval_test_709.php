<?php
// Eval injection test variation #709
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>