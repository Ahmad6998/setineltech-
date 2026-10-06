# 🛡️ Setinel Tech - Agency Website & Custom WordPress Theme

Welcome to **Setinel Tech**, a cutting-edge agency website and enterprise WordPress theme tailored for high-growth tech firms specializing in:
1. **Web Development** (Enterprise WordPress, Next.js, Headless CMS, E-Commerce, 99+ Core Web Vitals)
2. **App Development** (iOS & Android native, React Native, Flutter, 60 FPS, Biometrics, Real-Time WebSockets)
3. **Web Handling & DevOps** (24/7 Uptime Monitoring, Automated Offsite Backups, Cloudflare WAF, Incident Response SLAs)

Designed with a **Vibrant High-Contrast** theme: deep dark charcoal `#0b0d13`, glowing electric violet `#8b5cf6`, radiant emerald `#10b981`, and edge cyan `#06b6d4`.

---

## 📦 What's Included in This Project

| Directory / File | Description |
| :--- | :--- |
| **`setinel-tech-theme.zip`** | **Ready-to-upload WordPress Theme ZIP file**. Directly installable via WordPress Admin (`Appearance → Themes → Add New → Upload Theme`). |
| **`setinel-tech-theme/`** | The complete uncompressed WordPress theme codebase (`functions.php`, `front-page.php`, service templates, customizer, `style.css`, screenshot). |
| **`preview/`** | **Instant standalone browser preview** of the complete website. Runs without requiring PHP or MySQL! |
| **`preview/serve.py`** | Instant local HTTP server for testing the preview locally on port 8080. |
| **`package.json`** | Convenience scripts for npm (`npm run preview`, `npm run package`). |

---

## ⚡ 1. How to View the Live Preview Right Now

You can launch and view the interactive website immediately without any setup:

### Option A: Via Python server (Recommended)
```bash
python3 preview/serve.py
```
Open **`http://localhost:8080`** in your browser.

### Option B: Open directly in your browser
Simply open the file:
```
preview/index.html
```
in any web browser (Chrome, Firefox, Safari, Edge).

---

## 🚀 2. How to Install the Custom WordPress Theme

### Step 1: Upload to WordPress
1. Log in to your WordPress Admin dashboard (`/wp-admin`).
2. Go to **Appearance → Themes**.
3. Click **Add New Theme**, then click **Upload Theme** at the top.
4. Select `setinel-tech-theme.zip` and click **Install Now**.
5. Once the upload finishes, click **Activate**.

### Step 2: Configure Theme Settings
1. Go to **Appearance → Customize → Setinel Tech Settings**.
2. Configure your agency contact details:
   - **Agency Contact Email:** (e.g. `setineltech@gmail.com`)
   - **Agency Phone:** (e.g. `+92 300 0941144`)
   - **Hero Main Headline:** (Customizable value proposition)
3. Click **Publish**.

### Step 3: Create Service Pages (Optional)
When creating new pages under **Pages → Add New**, you can select specialized templates in the right sidebar:
- `Web Development Service Page`
- `App Development Service Page`
- `Web Handling Service Page`
- `Contact Page Template`

---

## 🌟 Interactive Features Built-In
- **Dynamic Cost Calculator:** Prospective clients can select services (Web, App, Web Handling), check feature add-ons, and see real-time price & timeline calculations.
- **Real-Time Terminal Simulator:** Animated status display simulating real-time system monitoring, active requests/sec, and edge latency.
- **Web Handling SLA Tiers:** 3-tier maintenance table (Core Care, Business Velocity, Enterprise Fortress).
- **Responsive Mobile Navigation:** Full-featured drawer menu for mobile and tablet devices.
- **Pure Modern Vanilla JS & CSS:** Zero heavy external libraries or bloated framework overhead.
