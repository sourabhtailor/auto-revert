<?php
// Eval injection test variation #678
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>