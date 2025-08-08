<?php
// Eval injection test variation #755
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>