# Composition
*Un website qu'il est bien, mais qu'il aurait été encore mieux pas en wordpress*

[Instructions](https://github.com/becodeorg/LIE-Jepsen-2.14/tree/master/02-the-hill/03-wordpress/projet)

#### Difficultés majeures rencontrées : 
- Bootsrap en combinaison avec wordpress (pour le responsive, notamment)
- Git et les merges 
- La media library de wordpress


|    | PHP & CSS | Custom fields | Responsive |
|----------|:-------------:|:------:|:------:|
| Front Page | x | x | x |
| Architecte d'intérieur | x | x |  |
| A propos | x | x |  |
| Contact | x | x | x |
| Blog (News) | x | n/a |  |
| Single | x | x |  |

### Menu :
- Extra menu pour la front page et custom menu pour toutes les autres pages
- Pas de problèmes particuliers rencontrés

### Front page :
- Quasiment identique à l'original
- Fonctionnel, rien à signaler
- Responsive sur tablette uniquement

### Architecte d'intérieur :
- Quasiment identique à l'original
- Deux fields repeaters fonctionnels
- Pas de carousel
- Pas responsif

### A propos :
- Récupération du code de la page architecte
- Pas responsif

### Contact :
- Formulaire de contact
- Map
- Heures d'ouverture, coordonnées, etc.
- Bandeau discount

### Blog (News) :
- Création de post types custom ("News") avec CPT UI
- Affichage des 6 News les plus récentes avec leur date, titre et 1ère image
- Pas de pagination
- Pas responsif, pas réussi à changer le script pour le nombre de posts à afficher par page

### Single :
- Custom fields avec du contenu flexible
- Fonctionnel, rien à signaler
- Pas responsif

