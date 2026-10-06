# 🛡️ Setinel Tech - Custom WordPress Theme

> **Official Enterprise WordPress Theme for Setinel Tech**  
> Tailored for high-growth digital agencies specializing in **Web Development**, **Mobile App Development**, and **24/7 Web Handling & Cloud DevOps**.

---

## 🎨 Design Specification
- **Color Scheme:** Luxury Obsidian & Champagne Amber / Gold (Deep obsidian black `#07080a`, metallic gold/amber accents `#f59e0b`, `#fbbf24`, emerald `#10b981`, and cyan `#06b6d4`, with full Dark/Light theme mode toggle).
- **Typography:** Outfit (Display/Headings), Plus Jakarta Sans (Body), JetBrains Mono (Tech/Status).
- **Aesthetic:** High-end tech agency aesthetic, glassmorphic obsidian surfaces, champagne amber accents, live terminal monitors, and official WhatsApp integration.

---

## 🚀 How to Install in WordPress

### Method 1: WordPress Dashboard Upload (Recommended)
1. Locate the pre-built `setinel-tech-theme.zip` in this project directory.
2. In your WordPress admin dashboard, navigate to:
   **Appearance → Themes → Add New Theme → Upload Theme**.
3. Choose `setinel-tech-theme.zip` and click **Install Now**.
4. Once uploaded, click **Activate**.

### Method 2: Manual Folder Upload (cPanel / FTP / LocalWP)
1. Copy the `setinel-tech-theme/` directory into your WordPress installation:
   ```bash
   /path-to-wordpress/wp-content/themes/setinel-tech/
   ```
2. Navigate to **Appearance → Themes** in your WordPress Admin.
3. Click **Activate** under **Setinel Tech**.

---

## ⚙️ Theme Configuration & Customizer

Go to **Appearance → Customize → Setinel Tech Settings** to configure:
- **Agency Contact Email:** (Defaults to `setineltech@gmail.com`)
- **Agency Hotline / SLA Support Phone:** (Defaults to `+92 300 0941144`)
- **Hero Main Headline:** (Customizable value proposition)

### Setting Up the Navigation Menu
1. Go to **Appearance → Menus**.
2. Create a new menu named `Primary Menu`.
3. Add links to:
   - **Home** (`/`)
   - **Services** (`/#services`)
   - **Web Handling** (`/#handling`)
   - **Tech Stack** (`/#tech-stack`)
   - **Case Studies** (`/#case-studies`)
   - **Contact** (`/#contact`)
4. Assign it to the **Primary Navigation** display location and save.
*(Note: If no menu is set, the theme includes an intelligent built-in fallback menu.)*

### Specialized Service Templates Included
When creating pages in WordPress (**Pages → Add New**), you can select the following page templates under **Template**:
- `Web Development Service Page` (`page-web-development.php`)
- `App Development Service Page` (`page-app-development.php`)
- `Web Handling Service Page` (`page-web-handling.php`)
- `Contact Page Template` (`page-contact.php`)

---

## 🧩 Recommended WordPress Plugins (Optional)
This theme is completely standalone with **zero required external plugins**. However, for enhanced capabilities in production:
- **Advanced Custom Fields (ACF Pro)**: For custom client case studies and metrics.
- **WP Mail SMTP**: To deliver contact form inquiries reliably via SendGrid, Postmark, or Amazon SES.
- **Contact Form 7** or **WPForms**: For advanced multi-step scoping questionnaires.
- **Redis Object Cache**: For sub-millisecond database queries.
- **Cloudflare**: For edge page caching and DDoS protection.

---

## 📂 File Architecture
```
setinel-tech-theme/
├── style.css                 # Theme metadata and primary styles
├── functions.php             # Core setup, asset enqueuing, customizer
├── header.php                # Site header, dynamic nav, brand logo
├── footer.php                # Site footer, global CTA, legal & copyright
├── front-page.php            # Main high-conversion agency homepage
├── index.php                 # Fallback blog archive & insights template
├── page.php                  # Standard page template
├── single.php                # Single article template
├── page-web-development.php  # Web Development pillar landing page
├── page-app-development.php  # App Development pillar landing page
├── page-web-handling.php     # 24/7 Web Handling pillar landing page
├── page-contact.php          # Contact & inquiry scoping template
├── 404.php                   # Error 404 terminal layout
├── screenshot.png            # 1200x900 theme preview for WP Admin
├── template-parts/           # Modular component templates
│   ├── hero.php
│   ├── services.php
│   ├── handling-plans.php
│   ├── tech-stack.php
│   ├── case-studies.php
│   └── contact-section.php
└── assets/
    ├── css/style.css
    └── js/main.js
```
