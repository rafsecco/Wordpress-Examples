# Wordpress Examples
Repository with examples of using Wordpress with Docker.


### Docker compose

Start the project with the following command:
```
cp .env.dev .env
docker compose --env-file .env.dev up -d --build
docker compose up -d --build
docker compose down
```

### Accessing the Wordpress instance
After starting the project, you can access the Wordpress/phpmyadmin instance at:
```
Wordpress:  http://localhost:8080
phpmyadmin: http://localhost:8081
```


#### Accessing the Wordpress instance
```
docker exec -it <nome_do_container> php -m | grep pgsql
```
