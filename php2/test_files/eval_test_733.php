<?php
// Eval injection test variation #733
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>