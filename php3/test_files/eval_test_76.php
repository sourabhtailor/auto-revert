<?php
// Eval injection test variation #76
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>