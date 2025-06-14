# 🐘 Proyecto PHP Dockerizado

Este proyecto proporciona un entorno de desarrollo PHP completo utilizando Docker Compose. Incluye:

- PHP 8.2 con FPM
- NGINX como servidor web
- MySQL como base de datos
- Configuración personalizable mediante `.env`
- Código montado desde `/src/public` como raíz del servidor

---

## 📦 Requisitos

- Docker
- Docker Compose
- Git

---

## 🚀 Cómo levantar el proyecto

### 1. Clonar el repositorio

```bash
git clone git@github.com:samuu2200/proyecto-php.git
cd proyecto-php
```

### ✅ 2. Crear archivo `.env`

Este proyecto incluye un archivo env.example con las variables necesarias.
Puedes copiarlo y modificarlo a tu gusto:

```bash
cp env.example .env
```

Contenido del .env (ejemplo)

```dotenv
MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=testdb
MYSQL_USER=user
MYSQL_PASSWORD=password 
```

### 🛠️ Comandos útiles

```bash
docker-compose up             # Inicia todos los servicios
docker-compose down           # Detiene y elimina contenedores
docker ps                     # Ver contenedores activos
docker exec -it php-app bash  # Accede al contenedor PHP
docker exec -it php-web bash  # Accede al contenedor NGINX
``