# WordPress Plugin Development Template

> A Docker-based development environment for creating and testing WordPress plugins locally.

[![Docker](https://img.shields.io/badge/Docker-Required-2496ED?logo=docker&logoColor=white)](https://www.docker.com/)

---

## Prerequisites

- Docker & Docker Compose installed

---

## Quick Start

Using the fancy script:

```bash
chmod +x setup.sh

./setup.sh
```

Or use Docker Compose directly:

```bash
docker-compose up -d
```

---

## Docker Commands

```bash
# Start services
docker-compose up -d

# Stop services (keeps data)
docker-compose stop

# Start after stop
docker-compose start

# Restart all services
docker-compose restart

# Rebuild containers
docker-compose up -d --force-recreate

# Remove everything (including all data)
docker-compose down -v

# View logs
docker-compose logs -f wordpress

# Execute command in WordPress container
docker-compose exec wordpress bash
```

---

## Services & Access URLs

| Service | URL | Credentials |
|---------|-----|-------------|
| WordPress Admin | http://localhost:8000/wp-admin | admin / (your password) |
| phpMyAdmin | http://localhost:8080 | wordpress / wordpress |
| MySQL | localhost:3306 | wordpress / wordpress |

---

## Initialize WordPress

1. Visit **http://localhost:8000**
2. Complete WordPress setup wizard
3. Log in to admin: **http://localhost:8000/wp-admin**
4. Install any required dependencies (e.g., WooCommerce)

---

## Troubleshooting

### Plugin not appearing in WordPress

1. Check if the folder exists in `plugins/`
2. Ensure it's not inside another folder
3. Restart Docker: `docker-compose restart wordpress`
4. Clear browser cache

### Changes not reflecting

1. Clear WordPress cache (if caching is enabled)
2. Check for PHP syntax errors in your plugin
3. View debug log: `docker-compose exec wordpress tail -f /var/www/html/wp-content/debug.log`

### Port already in use

If ports 8000, 8080, or 3306 are already in use:

1. Edit `docker-compose.yml`
2. Change the port mappings (left side of `:`)
3. Run `docker-compose restart`

### Database errors

```bash
docker-compose down -v
docker-compose up -d
```
