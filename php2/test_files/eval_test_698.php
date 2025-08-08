<?php
// Eval injection test variation #698
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>