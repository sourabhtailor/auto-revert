<?php
// Eval injection test variation #839
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>