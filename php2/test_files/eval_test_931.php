<?php
// Eval injection test variation #931
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>