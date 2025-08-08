<?php
// Eval injection test variation #1053
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>