<?php
// Eval injection test variation #449
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>