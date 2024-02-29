<?php

// Function to display the story prompt and choices
function displayStory() {
    echo "You find yourself standing in the dusty streets of a small frontier town, the sun beating down mercilessly. The air is tense with the promise of trouble brewing. As you glance around, you spot two figures eyeing each other down at the other end of the street. It's a classic Wild West standoff. What do you do?\n";
    echo "1. Draw your gun and intervene.\n";
    echo "2. Walk away and mind your own business.\n";
    echo "3. Stand still and do nothing.\n";
    echo "\n"; // Add a newline for better readability
}

// Function to handle user choice
function handleChoice($choice, &$sheriffOutcomeDisplayed, &$reputation) {
    switch ($choice) {
        case 1:
            echo "You reach for your revolver, ready to intervene and prevent a bloodbath. As you stride forward, you hear the click of a hammer behind you. You turn to see the town sheriff aiming his shotgun at you. 'I'll handle this, stranger. You best stay out of it.' Reluctantly, you holster your weapon and watch as the sheriff resolves the standoff peacefully. Reputation +1.\n";
            $sheriffOutcomeDisplayed = true; // Mark that the sheriff's outcome has been displayed
            $reputation += 1;
            break;
        case 2:
            echo "Deciding it's not your place to meddle in other people's affairs, you turn around and head in the opposite direction. Moments later, you hear gunshots and shouts erupting behind you. You quicken your pace, grateful for avoiding unnecessary trouble. Reputation +1.\n";
            $reputation += 1;
            break;
        case 3:
            echo "You choose to stand still, observing the tense scene from a distance. Surprisingly, the two figures suddenly lower their weapons and nod to each other before walking away in opposite directions. You breathe a sigh of relief, realizing that sometimes, inaction can be the most effective choice. Reputation +1.\n";
            $reputation += 1;
            break;
        default:
            echo "Invalid choice. Please select 1, 2, or 3.\n";
    }
}

// Function to display the third scenario prompt and choices
function displayThirdScenario() {
    echo "After handling the previous situation, you encounter a stranger on the street who seems distressed.\n";
    echo "They're being harassed by a group of bandits demanding money. What do you do?\n";
    echo "1. Intervene and confront the bandits.\n";
    echo "2. Offer to help the stranger find a safe place to hide.\n";
    echo "3. Pretend not to notice and walk away.\n";
    echo "4. Attempt to negotiate with the bandits.\n";
    echo "5. Distract the bandits to allow the stranger to escape.\n";
    echo "6. Use force to intimidate the bandits without violence.\n";
    echo "\n"; // Add a newline for better readability
}

// Function to display the fourth scenario prompt and choices
function displayFourthScenario() {
    echo "As you're about to leave town, you notice a runaway horse charging down the street with a child on its back.\n";
    echo "The child looks terrified and unable to control the horse. What do you do?\n";
    echo "1. Attempt to stop the horse and rescue the child.\n";
    echo "2. Yell for help and try to signal someone else to intervene.\n";
    echo "3. Leave it to fate and continue on your journey.\n";
    echo "4. Signal bystanders to help while you attempt to stop the horse.\n";
    echo "5. Create a barrier to redirect the horse's path.\n";
    echo "6. Assess the situation and devise a safer approach.\n";
    echo "\n"; // Add a newline for better readability
}

// Function to handle user choice for the third scenario
function handleThirdScenarioChoice($choice, &$reputation) {
    switch ($choice) {
        case 1:
            echo "You step forward, drawing your weapon and confronting the bandits. Your boldness catches them off guard, and they scatter, realizing you're not an easy target. The stranger thanks you profusely and offers a reward for your bravery. Reputation +1, Reward +1.\n";
            $reputation += 1;
            break;
        case 2:
            echo "You approach the distressed stranger and offer assistance, guiding them to a nearby hiding spot away from the bandits' view. The bandits pass by without noticing, and the stranger expresses gratitude, slipping you a valuable item as a token of appreciation. Reputation +1, Valuable item received.\n";
            $reputation += 1;
            break;
        case 3:
            echo "You decide not to get involved and continue on your way, ignoring the stranger's plight. As you walk off, you hear the sounds of a scuffle behind you but choose to ignore them, prioritizing your own safety over aiding others. Reputation -1, No reward or consequences.\n";
            $reputation -= 1;
            break;
        case 4:
            echo "You step forward, attempting to reason with the bandits and negotiate a peaceful resolution. Surprisingly, they agree to back down in exchange for a small sum of money. The stranger is grateful for your diplomatic approach and rewards you with a valuable item. Reputation +1, Valuable item received.\n";
            $reputation += 1;
            break;
        case 5:
            echo "Knowing direct confrontation could be dangerous, you create a distraction, allowing the stranger to slip away unnoticed. The bandits, focused on you, give chase momentarily before realizing their target has vanished. The stranger, safe from harm, thanks you and promises a reward. Reputation +1, Reward promised.\n";
            $reputation += 1;
            break;
        case 6:
            echo "Displaying your weapon but avoiding direct conflict, you manage to intimidate the bandits into backing off. They retreat, cursing under their breath, but leave the stranger unharmed. Grateful for your intervention, the stranger offers you a valuable tip for your troubles. Reputation +1, Valuable tip received.\n";
            $reputation += 1;
            break;
        default:
            echo "Invalid choice. Please select 1, 2, 3, 4, 5, or 6.\n";
    }
}

// Function to handle user choice for the fourth scenario
function handleFourthScenarioChoice($choice, &$reputation) {
    switch ($choice) {
        case 1:
            echo "Without hesitation, you rush forward, grabbing the reins and managing to halt the runaway horse just in time. The child, shaken but unharmed, thanks you profusely, and the townsfolk praise your bravery. Reputation +1, Town's gratitude earned.\n";
            $reputation += 1;
            break;
        case 2:
            echo "You raise the alarm, alerting nearby townsfolk to the danger while you attempt to stop the horse. With their assistance, you successfully intervene, rescuing the child from harm's way. The townsfolk applaud your bravery, and the child's family expresses heartfelt gratitude. Reputation +1, Town's gratitude earned.\n";
            $reputation += 1;
            break;
        case 3:
            echo "Thinking quickly, you position yourself to redirect the horse's path away from danger. With a well-timed maneuver, you manage to steer the horse towards an open area, preventing harm to the child and minimizing damage. The townsfolk admire your resourcefulness, and the child's family rewards you with a token of appreciation. Reputation +1, Token of appreciation received.\n";
            $reputation += 1;
            break;
        case 4:
            echo "Instead of acting impulsively, you take a moment to assess the situation carefully. You realize attempting to stop the horse directly could lead to more harm. Instead, you opt to calm the child and signal for help, ensuring a safer resolution. The townsfolk commend your level-headedness, and the child's family expresses deep gratitude for your cautious approach. Reputation +1, Gratitude earned.\n";
            $reputation += 1;
            break;
        case 5:
            echo "Unable to intervene directly, you attempt to attract the attention of nearby townsfolk to help stop the horse. Unfortunately, your efforts are in vain, and the child sustains minor injuries as the horse barrels past. The townsfolk, although sympathetic, question your inaction in the face of danger. Reputation -1, Minor injury to child.\n";
            $reputation -= 1;
            break;
        case 6:
            echo "You hesitate for a moment, unsure of the best course of action. By the time you decide, it's too late to stop the horse, and it gallops past you, narrowly missing the child. Although you're relieved the child is unharmed, you feel a pang of regret for not acting sooner. Reputation -1, No reward or consequences.\n";
            $reputation -= 1;
            break;
        default:
            echo "Invalid choice. Please select 1, 2, 3, 4, 5, or 6.\n";
    }
}

// Function to determine the player's title based on reputation
function determineTitle($reputation) {
    if ($reputation >= 10) {
        return "Legendary Hero of the Wild West";
    } elseif ($reputation >= 5) {
        return "Renowned Gunslinger";
    } elseif ($reputation >= 0) {
        return "Respected Citizen";
    } elseif ($reputation >= -5) {
        return "Troubled Outlaw";
    } else {
        return "Notorious Villain";
    }
}

// Main program
echo "Welcome to 'The Wild West Showdown'\n";
$reputation = 0;
$sheriffOutcomeDisplayed = false; // Initialize the variable to track if the sheriff's outcome has been displayed

// Display the first scenario prompt and choices
displayStory();

// Read user input from the command prompt
echo "Enter your choice: ";
$choice = trim(fgets(STDIN));

// Validate and handle user choice
if ($choice == 1 || $choice == 2 || $choice == 3) {
    handleChoice($choice, $sheriffOutcomeDisplayed, $reputation);
    $reputation++;
    
    // Display the third scenario prompt and choices
    displayThirdScenario();
    echo "Enter your choice for the third scenario: ";
    $choice = trim(fgets(STDIN));
    handleThirdScenarioChoice($choice, $reputation);
    $reputation++;
    
    // Display the fourth scenario prompt and choices
    displayFourthScenario();
    echo "Enter your choice for the fourth scenario: ";
    $choice = trim(fgets(STDIN));
    handleFourthScenarioChoice($choice, $reputation);
    $reputation++;
    
    // Display final reputation and title
    echo "\nYour final reputation: $reputation\n";
    echo "Your title: " . determineTitle($reputation) . "\n";
    
} else {
    echo "Invalid choice. Please select 1, 2, or 3.\n";
}

?>
