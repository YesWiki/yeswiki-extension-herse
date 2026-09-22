# Extension herse

Protège l'accès à un wiki entier par un identifiant et un mot de passe uniques,
demandés par le navigateur avant que la moindre page s'affiche.

C'est une barrière, pas un système de comptes : tout le monde partage le même
identifiant. Les comptes YesWiki continuent de fonctionner derrière.

## Configuration

Par l'interface :

1. Roue crantée, puis Gestion du site.
2. Onglet « fichier de conf. ».
3. Accordéon « Herse / Mot de passe unique d'entrée ».
4. Saisir un identifiant et un mot de passe.
5. Valider en bas de page.

Au chargement suivant, le navigateur demande ces identifiants.

Les mêmes valeurs peuvent s'écrire directement dans `wakka.config.php` :

| Clé | Rôle |
|---|---|
| `herse_id` | l'identifiant demandé |
| `herse_password` | le mot de passe demandé |

Laisser l'une des deux vide désactive la protection.

## Précaution

L'authentification se fait en HTTP Basic, donc les identifiants circulent en clair si
le wiki n'est pas servi en HTTPS. Ne pas utiliser cette extension sans certificat.
