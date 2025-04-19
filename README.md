# myclassictheme
My Classic Theme Development 2025, Another Paraller Development for fast coding.

# 🎨 MyClassicTheme

A custom-built classic WordPress theme — built from scratch for learning and customization.

---

## 📦 Files and Structure

myclassictheme/ │ ├── index.php # Main template file ├── header.php # Header section ├── footer.php # Footer section ├── functions.php # Enqueues styles and scripts ├── style.css # Theme meta info + styling ├── front-page.php # (Optional) For static homepage ├── README.md # You're reading it! └── dist/ # Assets (JS/CSS)


---

## 🚀 Features

- Clean theme structure  
- WordPress loop implementation  
- CSS and JS enqueuing  
- Responsive-ready layout  
- Supports static homepage

---

## 🏠 Static Homepage Setup

If you want your homepage to show a specific page instead of recent blog posts:

1. Go to **Dashboard > Settings > Reading**
2. Choose “**A static page**” option
3. Set:
   - **Homepage** → (e.g., “Home” page)
   - **Posts page** → (e.g., “Blog” page)
4. Click **Save Changes**

> WordPress will now render the `front-page.php` (if available) for the homepage.

---

## 🧑‍💻 Developer Notes

- Make sure all PHP files start with `<?php get_header(); ?>` and end with `<?php get_footer(); ?>`  
- Use the WordPress [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/) to structure your theme properly  
- Use `body_class()` and `post_class()` for better CSS targeting

---

## 📜 License

MIT License
