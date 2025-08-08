<?php
// Eval injection test variation #870
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>