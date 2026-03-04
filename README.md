# Chess Game Documentation

## Overview
This repository is a comprehensive implementation of a chess game. It provides both command-line and graphical user interfaces for players to engage in this classic game. This README aims to document the features, installation instructions, usage, and the design philosophy behind the project.

## Features

1. **Two-Player Mode**  
   Play against another human player locally or over a network. This feature supports complete menu-driven commands with options for starting a new game, saving, loading, and quitting the game.

2. **AI Opponent**  
   Play against a computer opponent. The AI uses various algorithms to determine its moves, offering different difficulty levels that players can choose from.

3. **Graphical User Interface (GUI)**  
   The game includes a user-friendly GUI that displays the chessboard, pieces, and possible moves visually. Players can interact with the game through clickable elements rather than just using the command line.

4. **Game Saving and Loading**  
   Players can save their progress at any point, with the ability to load previously saved games. This feature ensures that users won't lose their game state if they need to break from playing.

5. **Move Validation**  
   The game validates moves based on chess rules before applying them, ensuring compliance with the game's legal moves. This helps beginners learn the rules while preventing invalid moves.

## Installation
### Prerequisites
Before you begin, make sure you have:
- Python 3.x installed on your machine.
- All the required libraries specified in `requirements.txt`.

### Steps
1. Clone this repository:
   ```sh
   git clone https://github.com/dteta2gh/chess.git
   cd chess
   ```
2. Install the required libraries:
   ```sh
   pip install -r requirements.txt
   ```
3. Run the application:
   ```sh
   python main.py
   ```

## Usage
Upon running the application, choose between playing against another player or against the AI. Follow the on-screen instructions to navigate through the menus. Use the game window to visualize your moves and interactions.

## Contributing
Contributions are welcomed! To contribute, please follow these steps:
1. Fork this repository.
2. Create a new branch for your feature:
   ```sh
   git checkout -b feature/YourFeatureName
   ```
3. Commit your changes:
   ```sh
   git commit -m 'Add your feature'
   ```
4. Push to your branch:
   ```sh
   git push origin feature/YourFeatureName
   ```
5. Open a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments
- Special thanks to the contributors and the chess community for their inspiration and guidance.

---

Feel free to reach out with any questions or comments!