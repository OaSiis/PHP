# PHP

### Les Variables

Une variable, c'est une petite information stockée en mémoire temporairement. Elle n'a pas une grande durée de vie. En PHP, la variable (l'information) existe tant que la page est en cours de génération. Dès que la page PHP est générée, toutes les variables sont supprimées de la mémoire car elles ne servent plus à rien. Ce n'est donc pas un fichier qui reste stocké sur le disque dur mais une petite information temporaire présente en mémoire vive.

```php
$pokemon_name = "Salamèche";
```
1. On signale PHP que **ON UTILISE UNE VARIABLE** par le préfix : **$**
2. Le nom de la variable : **snake_case**.
3. Il y a le signe ( **=** ) pour attribuer à la variable une valeur.
4. La valeur, ici *"Salamèche"*
5. L'incontournable ( **;** ) qui permet de terminer l'instruction.

#### Type de variables

* **String** : Les chaînes de caractères
```php
$string = "Je suis un texte";
```

* **Integer** : Nombres entiers
```php
$integer = 42;
```

* **Float** : Nombres décimaux
```php
$pi = 3.14;
```

* **Booléens**
```php
$bool = TRUE; // 1
$bool = FALSE; // 0
```

* **Rien** : Absence de type
```php
$nothing = NULL;
```

#### Concaténation

La concaténation est justement un moyen d'assembler du texte et des variables.

```php
$age = 42;

echo "J'ai $age ans" // BAD
// J'ai 42 ans

echo 'J'ai' . $age . 'ans'; // GOOD
// J'ai 42 ans

echo 'J'ai $age ans'; // WRONG
// J'ai $age ans
```

#### Calcul

```
Symbole  Signification

  +      Addition

  -      Soustraction

  *      Multiplication

  /      Division

  %      Modulo : Division entière
```

### Les Conditions

#### Symbole

```
Symbole  Signification

  ==     Est égal à

  ===    Est égal à (valeur + type)

  >      Est supérieur à

  <      Est inférieur à

  >=     Est supérieur ou égal à

  <=     Est inférieur ou égal à

  !=     Est différent de
```

```php
// Si ... Sinon ...
if ($note < 10) {
    echo "Tu es mauvais";
} else {
    echo "Tu es assez bon";
}

// Si ... Sinon si ... Sinon ...
if ($note == 0) {
    echo "Tu es vraiment un gros nul !!!";
} elseif ($note == 5) {
    echo "Tu es très mauvais";
} elseif ($note == 7) {
    echo "Tu es mauvais";
} elseif ($note == 10) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
} elseif ($note == 12) {
    echo "Tu es assez bon";
} elseif ($note == 16) {
    echo "Tu te débrouilles très bien !";
} elseif ($note == 20) {
    echo "Excellent travail, c'est parfait !";
} else {
    echo "Je n'ai pas de message à afficher pour cette note";
}

switch ($note) // on indique sur quelle variable on travaille
{
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    case 12:
        echo "Tu es assez bon";
    break;
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    default:
        echo "Je n'ai pas de message à afficher pour cette note";
}
```

#### Cas booléens

Les trois exemples donnent exactement là même chose mais il est plus simple et plus performant d'utiliser le deuxième ou le troisième exemple

```php
$autorisation_entrer = true;

if ($autorisation_entrer == true) {
    echo "Bienvenue petit nouveau. :o)";
} elseif ($autorisation_entrer == false) {
    echo "T'as pas le droit d'entrer !";
}

if ($autorisation_entrer) { // TRUE
    echo "Bienvenue petit nouveau. :o)";
} else {
    echo "T'as pas le droit d'entrer !";
}

if (! $autorisation_entrer) { // FALSE
  echo "T'as pas le droit d'entrer !";
} else {
  echo "Bienvenue petit nouveau. :o)";
}

```

#### Ternaires

Le ternaire est une condition condensée qui fait deux choses sur une seule ligne :
* on teste la valeur d'une variable dans une condition ;
* on affecte une valeur à une variable selon que la condition est vraie ou non.

```php
echo ($note < 10) ? "Tu es mauvais" : "Tu es assez bon";
```

* ? = If
* : = Else

#### Conditions multiples
```
Symbole  Mot-clé  Signification

  &&       AND         Et

  ||       OR          Ou

```

```php
$note = 7;

// AND : TRUE && TRUE

if ($note < 10 && $note > 5) {
    // Vrai
}

if ($note < 10 && $note > 8) {
    // Faux
}

// OR : Une condition TRUE

if ($note < 10 || $note > 5) {
    // Vrai
}

if ($note < 10 || $note > 8) {
    // Vrai
}

```
### Boucles
Une boucle permet de répéter des instructions plusieurs fois. En clair, c'est un gain de temps, c'est très pratique, et bien souvent indispensable.

```php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100) // TANT QUE
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}

// Ceci est la ligne n°1
// Ceci est la ligne n°2
// ...
// Ceci est la ligne n°100
```

**FOR** est un autre type de boucle, dans une forme un peu plus condensée et plus commode à écrire, ce qui fait que **FOR** est assez fréquemment utilisé.

```php
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++) {
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}

// Ceci est la ligne n°1
// Ceci est la ligne n°2
// ...
// Ceci est la ligne n°100
```

Sachez que **FOR** et **WHILE** donnent le même résultat et servent à la même chose : répéter des instructions en boucle.

### Tableau
```php
$array = ['Salamèche', 40, 'Flammèche', true];

echo $array[0]; // "Salamèche"
echo $array[1]; // 40
echo $array[2]; // "Flammèche"
echo $array[3]; // true
```

```php
// Tableau associatif
$array = [
    'name' => 'Salamèche',
    'health' => 40,
    'attaque' => 'Flammèche',
    'enabled' => true
];

echo $array['name']; // Salamèche
echo $array['health']; // 40
echo $array['attaque']; // Flammèche
echo $array['enabled']; // true
```

Pour parcourir un tableau, on utilise la boucle **foreach**
```php
$pokemons = ['Salamèche', 'Carapuce', 'Pikachu', 'Magicarpe'];
foreach($pokemons as $pokemon) {
    echo $pokemon . '<br />';
}

// Affichera :
// Salamèche
// Carapuce
// Pikachu
// Magicarpe


//Si on a besoin de destructurer le tableau
$pokemon = ['Salamèche', 40, 'Flammèche', true];
foreach($pokemons as [$name, $heath, $attaque, $enabled]) {
    echo $name; // Salamèche
    echo $heath; // 40
    echo $attaque; // Flammèche
    echo $enabled; // true
}


// Tableau associatif
$pokemon = [
    'name' => 'Salamèche',
    'health' => 40,
    'attaque' => 'Flammèche',
    'enabled' => true
];

foreach($pokemon as $key => $item) {
    echo $key . 'vaut' . $item . '<br />';
}

// Affichera :
// name vaut Salamèche
// health vaut 40
// attaque vaut Flammèche
// enabled vaut true
```

### Fonction

Comme les boucles, les fonctions permettent d'éviter d'avoir à répéter du code PHP que l'on utilise souvent.
Tout simplement, une fonction est une série d'instructions qui effectue des actions et qui retourne une valeur.
```
f(x) = 2x + 4
f(2) = 8
```

La fonction attend **une/des valeur(s) d'entrée** que l'on nomme en programmation des **paramètres** par exemple (x) dans l'exemple ci-dessus.
Puis la fonction effectue des instructions et retourne une valeur / résultat

#### Appeler une fonction

Les noms de fonction : **camelCase**

```php
calculCube(); // Sans paramètre (ERROR)
calculCube(4); // Avec un paramètre
calculCube(4, 'rouge'); // Avec plusieurs paramètres

$volume = calculCube(4);
echo $volume // 64
```

```php
function calculCube($value, $color = 'vert') { // DEFAULT color = 'vert'
    return $value * $value * $value;
}
```