<?php
// Eval injection test variation #175
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>