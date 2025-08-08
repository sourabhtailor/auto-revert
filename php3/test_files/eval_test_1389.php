<?php
// Eval injection test variation #1389
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>