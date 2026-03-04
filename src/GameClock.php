<?php

class GameClock {
    private $whiteTime;
    private $blackTime;
    private $increment;
    private $isRunning;
    private $currentPlayer;
    private $startTime;

    public function __construct($whiteTime, $blackTime, $increment = 0) {
        $this->whiteTime = $whiteTime;
        $this->blackTime = $blackTime;
        $this->increment = $increment;
        $this->isRunning = false;
        $this->currentPlayer = 'white'; // Start with white
    }

    public function start() {
        $this->isRunning = true;
        $this->startTime = time();
    }

    public function stop() {
        $this->isRunning = false;
    }

    public function pause() {
        $this->isRunning = false;
    }

    public function resume() {
        $this->isRunning = true;
        $this->startTime = time();
    }

    public function switchPlayer() {
        if ($this->currentPlayer === 'white') {
            $this->currentPlayer = 'black';
            $this->updateTime();
        } else {
            $this->currentPlayer = 'white';
            $this->updateTime();
        }
    }

    private function updateTime() {
        $elapsed = time() - $this->startTime;
        if ($this->currentPlayer === 'white') {
            $this->whiteTime -= $elapsed;
            $this->whiteTime += $this->increment;
        } else {
            $this->blackTime -= $elapsed;
            $this->blackTime += $this->increment;
        }
        $this->startTime = time();
    }

    public function checkExpiration() {
        return $this->whiteTime <= 0 || $this->blackTime <= 0;
    }

    public function getFormattedTime($player) {
        if ($player === 'white') {
            return $this->formatTime($this->whiteTime);
        } else {
            return $this->formatTime($this->blackTime);
        }
    }

    private function formatTime($seconds) {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $seconds = $seconds % 60;
        return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
    }
}

?>