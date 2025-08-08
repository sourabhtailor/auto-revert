<?php
// Eval injection test variation #937
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>