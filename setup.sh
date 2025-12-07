#!/bin/bash

# WordPress Plugin Testing Environment Setup Script
# This script helps initialize the Docker environment for plugin testing

set -e

PROJECT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "🚀 WordPress Plugin Testing Environment Setup"
echo "=============================================="
echo ""

# Check if Docker is installed
if ! command -v docker &> /dev/null; then
    echo "❌ Docker is not installed. Please install Docker Desktop from https://www.docker.com"
    exit 1
fi

if ! command -v docker-compose &> /dev/null; then
    echo "❌ docker-compose is not installed."
    exit 1
fi

echo "✓ Docker and docker-compose found"
echo ""

# Start services
echo "📦 Starting Docker services..."
docker-compose -f "$PROJECT_DIR/docker-compose.yml" up -d

echo ""
echo "⏳ Waiting for services to be ready..."
sleep 5

# Check if services are running
if docker-compose -f "$PROJECT_DIR/docker-compose.yml" ps | grep -q "Up"; then
    echo "✓ Services started successfully"
else
    echo "❌ Services failed to start"
    docker-compose -f "$PROJECT_DIR/docker-compose.yml" logs
    exit 1
fi

echo ""
echo "✅ Setup Complete!"
echo ""
echo "📋 Next Steps:"
echo "1. Open your browser and go to: http://localhost:8000"
echo "2. Complete the WordPress setup wizard"
echo "3. Install and activate WooCommerce from the Plugins menu"
echo "4. Activate the 'Online Courses System' plugin"
echo ""
echo "📊 Dashboard:"
echo "   WordPress Admin: http://localhost:8000/wp-admin"
echo "   phpMyAdmin: http://localhost:8080"
echo ""
echo "💡 Useful Commands:"
echo "   View logs:      docker-compose logs -f wordpress"
echo "   Stop services:  docker-compose stop"
echo "   Restart:        docker-compose restart"
echo "   Stop & remove:  docker-compose down"
echo ""
