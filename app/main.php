<?php
error_reporting(E_ALL);

// Print shell prompt
fwrite(STDOUT, "$ ");

// Wait for user input
$input = fgets(STDIN);

// Remove leading/trailing whitespace and print error message
printf("%s: command not found\n", trim($input));
