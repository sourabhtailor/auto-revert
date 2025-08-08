<?php
// Eval injection test variation #347
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>