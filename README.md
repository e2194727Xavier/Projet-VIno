# Vino

#### copie du travail originale, je ne savais pas trop comment gérer le répertoire et je n'ai pas voulu y toucher. 

#### pour faciliter la tâche j'ai ajouté des liens ahref à la place de bouton lorsquon navigue... on pourra changer plus tard, à voir

##### 1- Noublie pas composer install & npm install & .env

###### 2- Changements apporté à la page login et create. les boutons et liens fonctionnes. 
###### 3- Ajout d'une page index lors de la connexion, pour le moment à titre d'exemple rien ne fonctionne, que mettre ici? (28juillet)
###### 4- Modif au footer - ajout icone 'acceuil' on doit connecter la wishlist, le reste est fonctionnel (29juillet)
###### 5- attention j'ai fais du ménage dans les dossiers afin de créer des sous-dossiers, ce qui peut occasionner des erreurs de routes.... 
###### 6- tailwind config changement d'une couleur red est maintenant red-wine.
--------------------------------------------------------------------------


 **Note importante : Pour que tailwindcss s'actualise, utilisez la commande 'npm run watch'. Un petit inconvénient ici est que vous devrez recharger la page à chaque fois vous modifiez le style**
 
## Instructions d'installation

1. Fork du dépôt de l'organisation vers votre compte GitHub.
2. Si vous n'êtes pas certain de savoir comment faire, vous pouvez [cliquer ici pour voir une vidéo](https://www.youtube.com/watch?v=Zh_0IEOlhtU&ab_channel=JonathanMartel) qui vous guidera étape par étape.
3. Clonez votre dépôt forké sur votre machine locale :
git clone https://github.com/VOTRE-NOM-UTILISATEUR/nom-du-depot.git
4. Naviguez vers le répertoire du projet :
cd nom-du-depot
5. Initialisez le projet avec Composer et NPM :
composer install
npm install
6. Renommez le fichier `.env.example` en `.env` et configurez les informations de votre base de données dans le fichier `.env`.
7. Générez une nouvelle clé d'application :
php artisan key:generate
8. Exécutez les migrations pour créer les tables de la base de données :
php artisan migrate
9. Pour récupérer les données des bouteilles de la SAQ, démarrez le serveur :
php artisan serve
10. Accédez à l'URL affichée dans votre navigateur(http://127.0.0.1:8000) et ajoutez `/update` à la fin de l'URL pour commencer l'ajout en masse des données des bouteilles. Veuillez noter que cela peut prendre plusieurs minutes (20 à 40 minutes) en fonction de la quantité de données à importer.

N'hésitez pas à me contacter si vous rencontrez des problèmes lors de l'installation ou si vous avez des questions supplémentaires.
