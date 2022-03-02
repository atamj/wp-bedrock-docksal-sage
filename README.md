# Mise en place du projet

## Prérequis
* Docker
* [Docksal](https://docksal.io)

# Installation

* Faites les commandes suivantes

      git clone https://github.com/atamj/wp-bedrock-docksal-sage.git my-project
      cd my-project
      fin start
      fin bash
      composer install
      cd web/app/themes/sage
      composer install
      exit
      docker run -it --rm -v $(pwd):/app -w /app node:16 yarn
      docker run -it --rm -v $(pwd):/app -w /app node:16 yarn build
      cp .env.example .env
      
* Éditerz le ficher .env en mettant à jour WP_HOME avec le bon url. Par exemple si le projet c'est my-project l'url sera http://my-project.docksal. 
* Mettre le même url pour développement dans le ficher web/wp-config.php
* Mettre à jour les clé dans le .env en utilisant le lien fournis
* Vous pouvez enfin ouvrir l'url

      
      
      
