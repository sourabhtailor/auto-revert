<?php
// Eval injection test variation #306
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>