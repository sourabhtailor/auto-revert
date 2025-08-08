<?php
// Eval injection test variation #691
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>