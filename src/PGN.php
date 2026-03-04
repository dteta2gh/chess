<?php

class PGN {
    private $games = [];

    // Parses PGN string into an array of games
    public function parse($pgn) {
        $games = explode('\n\n', trim($pgn));
        foreach ($games as $game) {
            $this->games[] = $this->parseGame($game);
        }
    }

    // Parses a single game
    private function parseGame($game) {
        $metadata = [];
        $movetext = '';

        // Regex to split metadata and movetext
        preg_match('/\[(.*?)\]/s', $game, $matches);
        if (isset($matches[1])) {
            $metadata = $this->parseMetadata($matches[0]);
            $movetext = preg_replace('/\[(.*?)\]/s', '', $game);
        }

        return [
            'metadata' => $metadata,
            'movetext' => trim($movetext)
        ];
    }

    // Parses metadata section
    private function parseMetadata($metadataStr) {
        $metadata = [];
        preg_match_all('/\[(.*?)\]/', $metadataStr, $matches);
        foreach ($matches[1] as $line) {
            list($key, $value) = explode(' ', $line, 2);
            $metadata[trim($key)] = trim(trim($value), '"');
        }
        return $metadata;
    }

    // Formats the game into PGN format
    public function format($game) {
        $pgn = '';
        foreach ($game['metadata'] as $key => $value) {
            $pgn .= "[{$key} \"{$value}\"]\n";
        }
        return $pgn . $game['movetext'] . "\n";
    }

    // Saves the PGN to a file
    public function saveToFile($filename) {
        file_put_contents($filename, $this->toString());
    }

    // Converts games to string representation
    public function toString() {
        $result = '';
        foreach ($this->games as $game) {
            $result .= $this->format($game);
        }
        return $result;
    }
}

// Example usage:
// $pgn = new PGN();
// $pgn->parse("[Event \"World Championship\"]\n1. e4 e5\n");
// $pgn->saveToFile('game.pgn');
