<?php
// Eval injection test variation #843
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>