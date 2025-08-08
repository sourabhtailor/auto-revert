<?php
// Eval injection test variation #53
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>