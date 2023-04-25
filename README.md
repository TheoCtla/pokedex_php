# Introduction
Vous serez évlué sur les critères suivants :
- La qualité du code et de l'architecture
- La qualité du design et du responsive design mobile et tablette
- La compréhension des concepts de base en développement web
- La capacité à résoudre des problèmes et **à trouver des solutions créatives**

Vous pusherez votre code sur votre propre répo Github et vous fournirez un fichier `.sql` de votre base de données.
Vous pouvez egalement heberger votre projet si vous le souhaitez.

# Pokédex

Un pokédex est une sorte de dictionnaire de tous les pokémons. Ces derniers peuvent se battre et disposent de caractéristiques de combat appelées statistiques. Chaque pokémon possède aussi un ou plusieurs types (plante, eau, feu etc ...).

Vous aurez besoin pour cette mission des outils suivants : 
- HTML / CSS
- Wordpress (facultatif)
- PHP
- MySQL


Une base de données à importer vous est fournie : `pokedex.sql`. Elle contient la liste des pokémon et 
leurs types. **Vous n'avez pas à la modifier**.

# Instructions 

Voici la liste des pages à faire, vous avez un aperçu de chaque dans le dossier `résultat` : 

- Une page d'accueil qui liste tous les pokémons présent en base de données (home.png)
- Une page détail d'un pokémon qui affiche son type et ses stats (detail.png)


## Par où commencer ?

Voilà quelques pistes pour vous aider : 

- Commencez par installer Wordpress
- Allez dans votre base de données et importer le fichier `pokedex.sql`
- Pour récupérer les types d'un pokémon, il faut utiliser une jointure sur la table `pokemon_type`
- Les images sont déjà prêtes et portent le nom du numéro du pokémon dans le dossier `image`
- Pour les barres de statistiques, la valeur maximale est de 255. On peut donc utiliser un produit en croix pour le remplissage

# Bonus (facultatif)

Je veux ajouter une fonctionnalité : récupérer des pokémons selon leur type.

Il nous faudra donc : 
- Une page qui liste les types de la base (types.png) 
- Une page qui liste les pokémons filtrés par le type (electrik.png)
