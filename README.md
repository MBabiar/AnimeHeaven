# AnimeHeaven

### This is improved version of [Original Project](https://github.com/MBabiar/WTECH-Eshop)

-   Original version was created at school (STU FIIT) on subject WTECH_B in team (2 people).
-   I created this repository for improving or experimenting on this project without affecting the repository of a school's project.

## Table of Contents

- [Description](#description)
- [Requirements](#requirements)
- [Installation](#installation)
  - [Installing the project](#installing-the-project)
  - [Setting up environment](#setting-up-environment)
  - [Setting up database](#setting-up-database)
    - [Setting up PostgreSQL](#setting-up-postgresql)
- [Usage](#usage)

## Description

AnimeHeaven is an e-shop where you can buy anime stuff. It is build on Laravel (version 12) and Bootstrap frameworks.

## Requirements

-   PHP 8.2 - 8.3 ([XAMP](https://www.apachefriends.org), WampServer or similar local development environment recommended for easy setup)
-   [Composer](https://getcomposer.org)
-   [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
-   DMS (Database management system). For example: [PostgreSQL](https://www.postgresql.org/download/)
-   _(optional)_ [PgAdmin](https://www.pgadmin.org)

## Installation

Assuming you have all the requirements installed, follow these steps to install the project:

### Installing the project

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

### Setting up environment

1. Create a `.env` file by copying the `.env.example` file:
    ```****
    cp .env.example .env
    ```
2. Generate a new application key:
    ```
    php artisan key:generate
    ```
3. Set up the database connection in the `.env` file:
    - You need to set up these variables based on your DMS:
        ```
        DB_CONNECTION - mysql, pgsql, sqlite, sqlsrv
        DB_HOST - IP address of the database server
        DB_PORT - port of the database server
        DB_DATABASE - name of the database
        DB_USERNAME - username for the database
        DB_PASSWORD - password for the database
        ```
    - For PostgreSQL, it looks like this:
        ```
        DB_CONNECTION=pgsql
        DB_HOST=127.0.0.1
        DB_PORT=5432
        ```
    - Now specify name of the database and credentials. **Make you use yours credentials**:
        ```
        DB_DATABASE=animeheaven
        DB_USERNAME=postgres
        DB_PASSWORD=postgres
        ```

### Setting up database

-   You can use any database management system you want.
-   I used PostgreSQL for this project.
-   If you want to use PostgreSQL, make sure you have [PostgreSQL](https://www.postgresql.org/download/) installed.

#### Setting up PostgreSQL

-   Create a new PostgreSQL database named `animeheaven`. **Make sure you use the same name as `DB_DATABASE` in the `.env` file**:
    ```
    CREATE DATABASE animeheaven;
    ```
-   Run migrations:
    ```
    php artisan migrate
    ```
-   Seed the database:
    ```
    php artisan db:seed
    ```

## Usage

When starting the project, you need to start both Laravel and Vite server.

-   To start Vite server, run:
    ```
    npm run dev
    ```
-   To start Laravel server, run:
    ```
    php artisan serve
    ```
