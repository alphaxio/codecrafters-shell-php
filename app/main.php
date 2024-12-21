<?php
error_reporting(E_ALL); // Display all errors for debugging

// Infinite loop to keep the shell running
while (true) {
    // Print the shell prompt
    fwrite(STDOUT, "$ ");

    // Read user input
    $input = fgets(STDIN);

    // Optionally, trim the input (not required for this stage)
    $input = trim($input);

    // For this stage, we don't process the input, just keep looping
}
