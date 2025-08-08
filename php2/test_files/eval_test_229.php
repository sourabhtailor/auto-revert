<?php
// Eval injection test variation #229
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>