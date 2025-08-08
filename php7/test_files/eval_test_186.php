<?php
// Eval injection test variation #186
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>