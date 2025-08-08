<?php
// Eval injection test variation #967
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>