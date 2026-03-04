<?php

namespace Chess;

class GameController {
    private $players;
    private $currentPlayerIndex;
    private $gameState;

    public function __construct() {
        $this->players = [];
        $this->currentPlayerIndex = 0;
        $this->gameState = 'waiting'; // Possible states: waiting, in_progress, finished
    }

    public function addPlayer($player) {
        if (count($this->players) < 2) {
            $this->players[] = $player;
        } else {
            throw new Exception('Two players are already added.');
        }
    }

    public function validateMove($move) {
        // Logic to validate the move
        // This should include checks for the current player's turn, valid piece moves, etc.
        return true; // Placeholder: implement actual validation logic
    }

    public function manageTurn($move) {
        if ($this->validateMove($move)) {
            // Update the game state based on the move
            $this->transitionGameState();
            $this->switchPlayer();
        }
    }

    private function switchPlayer() {
        $this->currentPlayerIndex = ($this->currentPlayerIndex + 1) % 2; // Alternate between 0 and 1
    }

    private function transitionGameState() {
        // Logic to transition the game state
        // This may change the state from waiting -> in_progress, or in_progress -> finished
        if ($this->gameState === 'waiting') {
            $this->gameState = 'in_progress';
        } else if ($this->gameState === 'in_progress') {
            // Check for winning conditions, etc.
            // If game finished:
            // $this->gameState = 'finished';
        }
    }

    public function getCurrentPlayer() {
        return $this->players[$this->currentPlayerIndex];
    }

    public function getGameState() {
        return $this->gameState;
    }
}

?>