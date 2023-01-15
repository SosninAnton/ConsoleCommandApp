FROM jtreminio/php:8.1
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./app.php" ]