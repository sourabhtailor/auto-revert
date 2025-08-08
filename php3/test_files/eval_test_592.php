<?php
// Eval injection test variation #592
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>