<?php
// Eval injection test variation #291
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>