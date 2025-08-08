<?php
// Eval injection test variation #1147
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>