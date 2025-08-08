<?php
// Eval injection test variation #914
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>