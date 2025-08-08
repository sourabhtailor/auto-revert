<?php
// Eval injection test variation #164
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>