<?php
// Eval injection test variation #580
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>