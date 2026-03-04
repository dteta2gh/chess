<?php

/**
 * Parses and converts chess notation to a user-friendly format.
 *
 * This class provides functionality to parse standard chess notation
 * into structured data and convert it back to notation strings.
 */

class NotationParser {
    private $move;

    public function __construct($move) {
        $this->move = $move;
    }

    /**
     * Parses a chess move from Standard Algebraic Notation (SAN).
     *
     * @return array
     */
    public function parse() {
        // TODO: Implement parsing logic
        return ["original" => $this->move];
    }

    /**
     * Converts the parsed move back to SAN.
     *
     * @return string
     */
    public function convertToSAN() {
        // TODO: Implement conversion logic
        return $this->move;
    }
}

// Example usage:
$parser = new NotationParser('e4');
$parsed = $parser->parse();
echo json_encode($parsed);