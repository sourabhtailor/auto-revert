<?php
// Eval injection test variation #25
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>