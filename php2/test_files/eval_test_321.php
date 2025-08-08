<?php
// Eval injection test variation #321
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>