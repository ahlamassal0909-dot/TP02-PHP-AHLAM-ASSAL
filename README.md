# TP02-PHP-AHLAM-ASSAL
TP 02 PHP - Programmation Web 2
# TP02-PHP-AHLAM ASSAL

## Informations
- Nom : ASSAL
- Prénom : AHLAM
- Groupe : 03
- Titre : Programmation Web 2 - TP PHP

## Liste des exercices
- Exercice 1
- Exercice 2
- Exercice 3
- Exercice 4
- Exercice 5
- Exercice 6
- Exercice 7
- Exercice 8
- Exercice 9
- Exercice 10 - GET
- Exercice 10 - POST


## Exercice 2 — Variables en PHP

### Pourquoi $note et $Note sont différentes ?

En PHP, les noms des variables sont sensibles à la casse.

Donc `$note` et `$Note` sont deux variables différentes.

### Noms de variables valides

Les noms de variables valides en PHP sont :

- `$a`
- `$_a`
- `$a_a`
- `$AAA`
- `$a1`

Les noms `$a!` et `$1a` sont invalides.


## Exercice 4 — Types et conversions

### Différence d'affichage de false avec echo et var_dump()

Avec `echo`, la valeur `false` n'affiche rien.

Avec `var_dump()`, PHP affiche le type et la valeur :

bool(false)

Donc `var_dump()` permet de voir clairement que la valeur est un booléen `false`.


## Exercice 5 — Conditions

### Valeurs testées et résultats

- `-1` → Note invalide
- `9` → Non validé
- `10` → Passable
- `12` → Assez bien
- `14` → Bien
- `16` → Très bien
- `21` → Note invalide


## Exercice 10 — GET et POST

### Partie A — GET

Après l'envoi du formulaire avec la méthode GET, les valeurs apparaissent dans l'URL.

Exemple :

ex10_get.php?nom=ASSAL&prenom=AHLAM&groupe=G3

Les données sont donc visibles dans l'URL.

### Partie B — POST

Avec la méthode POST, les valeurs ne sont pas affichées dans l'URL.

Les données sont envoyées dans le corps de la requête.

### Comparaison entre GET et POST

GET → les données apparaissent dans l'URL.

POST → les données n'apparaissent pas dans l'URL.

### Partie C — Vérifications

`isset()` permet de vérifier si un champ existe.

`trim()` permet de vérifier si le champ est vide ou contient seulement des espaces.

`htmlspecialchars()` permet de protéger l'affichage des données saisies dans la page HTML.