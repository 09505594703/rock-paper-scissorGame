<?php

function playGame($player1, $player2) {
    if ($player1 == $player2) {
        return "It's a tie!";
    } elseif (
        ($player1 == 'Scissors' && ($player2 == 'Paper' || $player2 == 'Lizard')) ||
        ($player1 == 'Paper' && ($player2 == 'Rock' || $player2 == 'Spock')) ||
        ($player1 == 'Rock' && ($player2 == 'Lizard' || $player2 == 'Scissors')) ||
        ($player1 == 'Lizard' && ($player2 == 'Spock' || $player2 == 'Paper')) ||
        ($player1 == 'Spock' && ($player2 == 'Scissors' || $player2 == 'Rock'))
    ) {
        return "</br>Kimmy wins!</br></br> Kimmy choice: $player1, Carmelotes choice: $player2 ";
    } else {
        return "</br>Carmelotes wins! </br></br>Kimmy choice: $player1, Carmelotes choice: $player2  ";
    }
}

// input here
$player1Choice = 'Scissors'; 
$player2Choice = 'Lizard';

$result = playGame($player1Choice, $player2Choice);
echo $result;


switch ($result) {
    case "It's a tie!":
        echo "</br>It's a tie! </br> " . getWinningReason($player1Choice, $player2Choice);
        break;
    default:
        echo "</br></br> " . getWinningReason($player1Choice, $player2Choice);
        break;
}

function getWinningReason($choice1, $choice2) {

    $reasons = [
        'Scissors' => [
            'Paper' => 'Scissors cuts Paper',
            'Lizard' => 'Scissors decapitates Lizard',
        ],
        'Paper' => [
            'Rock' => 'Paper covers Rock',
            'Spock' => 'Paper disproves Spock',
        ],
        'Rock' => [
            'Lizard' => 'Rock crushes Lizard',
            'Scissors' => 'Rock crushes Scissors',
        ],
        'Lizard' => [
            'Spock' => 'Lizard poisons Spock',
            'Paper' => 'Lizard eats Paper',
        ],
        'Spock' => [
            'Scissors' => 'Spock smashes Scissors',
            'Rock' => 'Spock vaporizes Rock',
        ],
    ];

    // return balyu
    return $reasons[$choice1][$choice2];
}

?>
