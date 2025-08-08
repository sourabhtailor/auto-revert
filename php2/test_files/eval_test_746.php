<?php
// Eval injection test variation #746
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>