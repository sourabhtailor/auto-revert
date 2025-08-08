<?php
// Eval injection test variation #888
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>