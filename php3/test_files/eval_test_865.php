<?php
// Eval injection test variation #865
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>