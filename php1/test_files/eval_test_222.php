<?php
// Eval injection test variation #222
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>