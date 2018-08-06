# Install

```
sudo apt-get install docker
sudo apt-get install docker-compose
```

# Build docker compose

```
sudo docker-compose up --build
sudo docker-compose up
```

# Delete all docker images

```
sudo docker stop $(sudo docker ps -a -q)
sudo docker rm $(sudo docker ps -a -q)
```
