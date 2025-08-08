<?php
// Eval injection test variation #787
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>