<?php
// Eval injection test variation #672
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>