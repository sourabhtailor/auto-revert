<?php
// Eval injection test variation #951
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>