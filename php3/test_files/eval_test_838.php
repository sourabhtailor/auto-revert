<?php
// Eval injection test variation #838
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>