<?php
// Eval injection test variation #133
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>