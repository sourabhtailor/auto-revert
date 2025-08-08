<?php
// Eval injection test variation #362
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>