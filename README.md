# Mise en place du projet

## Prérequis
* Docker
* [Docksal](https://docksal.io)

# Installation

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
      
Il faut ensuite éditer le ficher .env en mettant à jour WP_HOME avec le bon url. Par exemple si le projet c'est my-project l'url sera http://my-project.docksal. Il faut mettre le même url pour développement dans le ficher web/wp-config.php

Vous pouvez enfin ouvrir l'url pour installer le projet

      
      
      
