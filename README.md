# AnimeHeaven
### This is improved version of [Original Project](https://github.com/MBabiar/WTECH-Eshop)

-   Original version was created at school (STU FIIT) on subject WTECH_B in team (2 people).
-   I created this repository for improving or experimenting on this project without affecting the repository of a school's project.

## Table of Contents
  - [Description](#description)
  - [Installation](#installation)
  - [Usage](#usage)

## Description
AnimeHeaven is an e-shop where you can buy anime stuff. It is build on Laravel (version 12) and Bootstrap frameworks.

## Requirements
-   PHP 8.2 - 8.3 ([XAMP](https://www.apachefriends.org) or WampServer or similar local development environment recommended for easy setup)
-   [Composer](https://getcomposer.org)
-   [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
-   [PostgreSQL](https://www.postgresql.org/download/)
-   _Optional:_ [PgAdmin](https://www.pgadmin.org)

## Installation
Assuming you have all the requirements installed, follow these steps to install the project:
1. Clone the repository:
    ```
    git clone https://github.com/MBabiar/AnimeHeaven.git
    ```
2. Navigate to the project directory
3. Install PHP dependencies:
    ```
    composer install
    ```
4. Install NPM dependencies:
    ```
    npm install
    ```
5. Create a new PostgreSQL database named animeheaven
    ```
    CREATE DATABASE animeheaven;
    ```
6. Run migrations:
    ```
    php artisan migrate
    ```
7. Seed the database:
    ```
    php artisan db:seed
    ```
8. Start vite server:
    ```
    npm run dev
    ```
9. Start the Laravel server:
    ```
    php artisan serve
    ```

## Usage
