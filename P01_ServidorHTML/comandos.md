### FASE 0 Nginx Alpine Image:
docker pull nginx:alpine
### FASE 1 Crear contenedor:
docker run --name alpineserver -p 8080:80 nginx:alpine
### FASE 2 Comprobar:
docker run --rm alpineserver
### FASE 3 Iniciar contendor:
docker run alpineserver
### FASE 4 Cambiar permisos carpeta html:
sudo chmod -R 664 Escritorio/Practicas_docker/P01_ServidorHTML/html
### FASE 4 Copiar archvios server:
sudo docker cp ./html/index.html alpineserver:/usr/share/nginx/html

# uwu
