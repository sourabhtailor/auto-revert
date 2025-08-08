<?php
// Eval injection test variation #160
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>