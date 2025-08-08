<?php
// Eval injection test variation #697
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>