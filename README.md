### Start Containers
###### docker compose up -d

### Stopping all containers  
###### docker stop $(docker ps -q)

### Stopping and removing  all containers  
###### docker compose down




### Granting all permissions (read, write, and execute) to a folder and its contents  
###### sudo chmod -R 777 src/




### Entering the MySQL container  
###### docker exec -it <container_name> bash




### Rebuilds the Docker images and starts the containers in detached mode.  
###### docker-compose up -d --build





### Stops and removes all unused containers, images, volumes, and networks without confirmation.  
###### docker system prune -a --volumes -f




### Stops all running containers and then cleans up the Docker system by removing all unused containers, images, volumes, and networks.  
###### docker stop $(docker ps -aq) && docker system prune -af --volumes

