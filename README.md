# Menus Activity – Laravel Blade Template System

This project was developed as part of **Activity 11**, where the objective is to understand and apply Laravel’s Blade template inheritance system.

## 🎯 Objective
Create a Laravel project with a primary view that contains a navigation menu and multiple secondary views that inherit from a main layout using Blade.

---

## 📌 Features Implemented

### ✔ Primary View (Layout)
A main layout (`main.blade.php`) containing:
- Navigation menu
- Blade `@yield()` section for each page
- Footer visible in all sections

### ✔ Secondary Views
Three pages were created:
- **Home**
- **Photos**
- **Contact**

Each has unique content to clearly identify the section.

### ✔ Active Menu Highlight
The menu automatically highlights the selected section using Blade logic:

```blade
class="{{ request()->is('photos') ? 'active' : '' }}"
