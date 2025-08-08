<?php
// Eval injection test variation #484
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>