<?php
// Eval injection test variation #862
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>