## How to get this docker services up and running? 
- Step1: Make sure that **Docker Desktop** is running
- Step2: Download the Zipped file https://github.com/dipaish/web-dev-env/archive/refs/heads/main.zip
- Step3: Unzip it anywhere in your PC. Make sure that you don't delete this folder. 
- Step4: Start your **Visual Studio Code** and open the folder that you have unizziped recently.
- Step5: Start **terminal** in Visual studio code and run the following command: 
  ``` docker-compose up -d ```

## After a while, all your services are ready. 

- Service 1: MySQL Database Service (6034) >> localhost:6034
- Service 2: Apache PhP Environment (Port 81) >> localhost:81
- Service 3: phpmyadmin (Port 82) >> localhost:82
- Service 4: Wordpress (Port 83) >> localhost:83

## Important Folders

- **src** >> A folder where your php code is going to be located. 
A simple php code is there by default

- **wordpress** >> folder for your wordpress site

## php.ini
The folder contains php.ini. If you need to configure your php setup, you can make required changes to the file. After making changes, execute the following command by starting **terminal** in Visual studio code: 

  ```docker compose up -d --build ```

## To get started with wordpress
- Step 1: Get to **phpmyadmin** and create a database as below:
  Database Name: wordpress
  Database User: wordpress
  Database Password: wordpress
```
 phpmyadmin >> user accounts >> Add User Account >> Type the username and password as above
Just make sure that you check the following options
Database for user account
 Create database with same name and grant all privileges. 
``` 
- Step 2: Get to the browser and type **localhost:83**
- Step 3: Follow the installation Process

## Recommended Extensions for VSC 
- Docker
- Docker Explorer
- GitHub Repositories
- GitHub Pull Requests & Issues
- PHP (All-in-One PHP Support)

## Learn Docker Compose
- **Use Docker Compose:** https://docs.microsoft.com/en-us/visualstudio/docker/tutorials/use-docker-compose 
- **Definitive Guide to Docker Compose:** https://gabrieltanner.org/blog/docker-compose



