# Usar a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Habilitar o mod_rewrite do Apache (opcional, útil para URLs amigáveis)
RUN a2enmod rewrite

# Instalar extensões básicas do PHP (opcional, pode adicionar mais no futuro)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Definir o diretório de trabalho dentro do contêiner
WORKDIR /var/www/html

# Copiar os arquivos do projeto para o contêiner
COPY ./src /var/www/html

# Expor a porta 80 para o servidor Apache
EXPOSE 80