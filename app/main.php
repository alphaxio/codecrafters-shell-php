<?php

// Enable error reporting for debugging
error_reporting(E_ALL);

// Start the REPL loop
while (true) {
    // Print the shell prompt
    fwrite(STDOUT, "$ ");
    
    // Read the user input
    $input = fgets(STDIN);
    
    // Remove any extra whitespace or newlines
    $command = trim($input);
    
    // Check if the input is empty (e.g., user just pressed Enter)
    if ($command === "") {
        continue; // Skip processing and go back to waiting for input
    }
    
    // Print the error message for the invalid command
    printf("%s: command not found\n", $command);
}
