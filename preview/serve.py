#!/usr/bin/env python3
import http.server
import socketserver
import os
import sys
import threading
import time

PORTS = [8080, 8000, 3000, 8081]
DIRECTORY = os.path.dirname(os.path.abspath(__file__))

class CustomHandler(http.server.SimpleHTTPRequestHandler):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, directory=DIRECTORY, **kwargs)

    def log_message(self, format, *args):
        # Clean console log with port
        sys.stderr.write("[%s] %s\n" % (self.log_date_time_string(), format % args))

def serve_on_port(port):
    class ReuseServer(socketserver.TCPServer):
        allow_reuse_address = True
    try:
        with ReuseServer(("0.0.0.0", port), CustomHandler) as httpd:
            print(f"  ✓ Live on port {port}: http://localhost:{port}")
            sys.stdout.flush()
            httpd.serve_forever()
    except OSError as e:
        print(f"  - Port {port} skipped ({e})")
        sys.stdout.flush()

def run():
    print("=======================================================")
    print("  🛡️ Setinel Tech - Zero-Docker Localhost Server")
    print("=======================================================")
    print(f"Serving Directory: {DIRECTORY}")
    print("Starting multi-port listeners...")
    sys.stdout.flush()

    threads = []
    for port in PORTS:
        t = threading.Thread(target=serve_on_port, args=(port,), daemon=True)
        t.start()
        threads.append(t)
        time.sleep(0.1)

    print("=======================================================")
    print("Ready! You can access the site at any of the ports above.")
    print("Primary URL: http://localhost:8080")
    print("=======================================================")
    sys.stdout.flush()

    try:
        while True:
            time.sleep(1)
    except KeyboardInterrupt:
        print("\nServer stopped.")

if __name__ == '__main__':
    run()
