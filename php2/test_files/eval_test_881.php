<?php
// Eval injection test variation #881
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>