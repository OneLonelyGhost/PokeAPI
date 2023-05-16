<!DOCTYPE html>
<html>
<head>
    <title>Pokémon Lookup</title>
</head>
<body>
    <h1>Pokémon Lookup</h1>
    <form method="POST">
        <label for="pokedexNumber">Pokédex Number:</label>
        <input type="text" id="pokedexNumber" name="pokedexNumber" required>
        <input type="submit" value="Lookup">
    </form>

    <?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the entered Pokédex number
        $pokedexNumber = $_POST['pokedexNumber'];

        // Create an instance of the PokeApi class
        $api = new PokePHP\PokeApi();

        // Fetch the Pokémon data
        $pokemonData = $api->pokemon($pokedexNumber);

        // Check if an error occurred
        if (json_decode($pokemonData) === 'An error has occurred.') {
            echo '<p>An error occurred while retrieving the Pokémon data. Please try again later.</p>';
        } else {
            // Decode the JSON data
            $pokemon = json_decode($pokemonData);

            // Display the Pokémon information
            echo '<h2>' . ucfirst($pokemon->name) . '</h2>';
            echo '<img src="' . $pokemon->sprites->front_default . '" alt="Pokemon Image">';
            echo '<p>Height: ' . $pokemon->height . '</p>';
            echo '<p>Weight: ' . $pokemon->weight . '</p>';
            echo '<h3>Abilities:</h3>';
            echo '<ul>';
            foreach ($pokemon->abilities as $ability) {
                echo '<li>' . ucfirst($ability->ability->name) . '</li>';
            }
            echo '</ul>';
            echo '<h3>Types:</h3>';
            echo '<ul>';
            foreach ($pokemon->types as $type) {
                echo '<li>' . ucfirst($type->type->name) . '</li>';
            }
            echo '</ul>';
        }
    }
    ?>
</body>
</html>
