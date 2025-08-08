<?php
// Eval injection test variation #911
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>