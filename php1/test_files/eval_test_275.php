<?php
// Eval injection test variation #275
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>