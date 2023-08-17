# Vino App

**Travail effectué dans le cadre d'un porjet d'équipe de fin de session**


<img src="/vino-login.png"  width="220" height="400">
<img src="/vino-accueil.png"  width="220" height="400">
<img src="/vino-catalogue.png"  width="220" height="400">

### https://marylinec.sg-host.com/

## Instructions d'installation

1. Clonez le dépot sur votre machine locale :

    ```bash
    git clone https://github.com/maryline888/Projet-VIno/

2. Naviguez vers le répertoire du projet :
    ```bash
    cd nom-du-depot
3. Initialisez le projet avec Composer et NPM :
    ```bash
    composer install
    npm install

4. Renommez le fichier `.env.example` en `.env` et configurez les informations de votre base de données dans le fichier `.env`.

5. Générez une nouvelle clé d'application :
    ```bash
    php artisan key:generate

6. Exécutez les migrations pour créer les tables de la base de données :
    ```bash
    php artisan migrate

7. Pour récupérer les données des bouteilles de la SAQ, démarrez le serveur :
    ```bash
    php artisan serve

8. Accédez à l'URL affichée dans votre navigateur(http://127.0.0.1:8000) et ajoutez `/update` à la fin de l'URL pour commencer l'ajout en masse des données des bouteilles. Veuillez noter que cela peut prendre plusieurs minutes (20 à 40 minutes) en fonction de la quantité de données à importer.

 **Note importante : Pour que tailwindcss s'actualise, utilisez la commande 'npm run watch'. Un petit inconvénient ici est que vous devrez recharger la page à chaque fois vous modifiez le style**