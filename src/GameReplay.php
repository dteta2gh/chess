<?php

class GameReplay {
    private $moves;
    private $currentMove;

    public function __construct($moves) {
        $this->moves = $moves;
        $this->currentMove = 0;
    }

    public function replay() {
        if ($this->currentMove < count($this->moves)) {
            return $this->moves[$this->currentMove++];
        }
        return null; // End of replay
    }

    public function reset() {
        $this->currentMove = 0;
    }

    public function navigateToMove($moveIndex) {
        if (isset($this->moves[$moveIndex])) {
            $this->currentMove = $moveIndex;
            return $this->moves[$this->currentMove];
        }
        return null; // Invalid move index
    }
}

// Example usage:
$moves = ['e4', 'e5', 'Nf3', 'Nc6'];
$replay = new GameReplay($moves);
while ($move = $replay->replay()) {
    echo $move . "\n";
}