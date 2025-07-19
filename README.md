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
