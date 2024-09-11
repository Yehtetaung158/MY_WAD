<?php

class TextBuilder {
    private $text = ""; // Similar to $rawSql in QueryBuilder

    // Constructor to initialize the text with optional initial value
    function __construct($initialText = "") {
        $this->text = $initialText;
    }

    // Method to append text
    public function append($string) {
        $this->text .= $string; // Concatenate the string
        return $this; // Return $this for method chaining
    }

    // Method to insert a new line
    public function newLine() {
        $this->text .= "\n"; // Add a newline character
        return $this; // Return $this for method chaining
    }

    // Method to clear the text
    public function clear() {
        $this->text = ""; // Reset the text
        return $this;
    }

    // Method to return the constructed text
    public function getText() {
        return $this->text; // Return the current text
    }
}