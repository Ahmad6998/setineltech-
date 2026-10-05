#!/usr/bin/env bash
# ========================================================
# Setinel Tech - Zero-Docker Localhost Launcher
# ========================================================
set -e

DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" >/dev/null 2>&1 && pwd)"
cd "$DIR"

echo "======================================================="
echo "  🛡️ Setinel Tech - Localhost Server (Zero Docker)"
echo "======================================================="
echo "Serving: $DIR/preview"
echo "Open in browser: http://localhost:8080"
echo "======================================================="

python3 preview/serve.py
