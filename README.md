# Build only the app container

```
sudo docker build -t odaw .
```

```
sudo docker run -d -p 8080:80 odaw
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
