<?php
// Eval injection test variation #939
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>