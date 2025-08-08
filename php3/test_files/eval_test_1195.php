<?php
// Eval injection test variation #1195
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>