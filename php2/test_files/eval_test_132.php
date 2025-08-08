<?php
// Eval injection test variation #132
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>