<?php
// Eval injection test variation #655
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>