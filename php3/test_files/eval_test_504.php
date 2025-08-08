<?php
// Eval injection test variation #504
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>