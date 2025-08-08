<?php
// Eval injection test variation #154
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>