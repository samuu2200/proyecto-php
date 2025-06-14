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

## ✅ 2. Añade un ejemplo del `.env`

Debajo de los pasos, puedes añadir:


### 1. Crear archivo `.env`

Copia este contenido en un archivo llamado `.env`:

```dotenv
MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=testdb
MYSQL_USER=user
MYSQL_PASSWORD=password 
```
