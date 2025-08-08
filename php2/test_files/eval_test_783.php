<?php
// Eval injection test variation #783
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>