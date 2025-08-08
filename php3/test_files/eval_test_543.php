<?php
// Eval injection test variation #543
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>