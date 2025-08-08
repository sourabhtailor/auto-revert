<?php
// Eval injection test variation #111
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>