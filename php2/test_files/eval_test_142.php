<?php
// Eval injection test variation #142
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>