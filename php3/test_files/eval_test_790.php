<?php
// Eval injection test variation #790
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>