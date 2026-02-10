

<h1 align="center">Personal Portfolio – Laravel Livewire</h1>

<p align="center">
  A modern, dynamic, and customizable developer portfolio built with Laravel, Livewire, and Tailwind CSS.
</p>

<p align="center">
  <strong>Cartoony UI • Illustrations • Interactive • Scalable</strong>
</p>

---

## ✨ About The Project

This project is my **personal portfolio website**, designed to showcase my skills, projects, and career journey in a **fun, visual, and interactive way**.

Instead of using a static frontend or heavy JavaScript frameworks, the portfolio relies on **Laravel Livewire** to deliver a smooth SPA-like experience while keeping the backend clean and maintainable.

The goal is to create a portfolio that feels **alive**, **playful**, and **professional at the same time**.

---

## 🎨 Design & Style

- 🧩 **Cartoony / illustrated style**
- 🎯 Friendly UI with soft colors and playful layouts
- 💡 Focus on clarity, storytelling, and personality
- ⚡ Smooth interactions without excessive JavaScript

This design choice makes the portfolio stand out from traditional, overly minimal portfolios.

---

## 🚀 Features

### Public Side
- Dynamic **Home**, **About**, **Projects**, **Career**, and **Contact** sections
- Projects displayed with categories and descriptions
- Career timeline (education, experience, certifications, languages)
- Responsive design for all devices
- Contact form with database storage

### Admin Dashboard
- Full admin panel built with Livewire
- Manage:
  - Profile information
  - Projects
  - Skills (with levels & categories)
  - Education & experience
  - Certifications & languages
  - Messages from visitors
- Clean CRUD system without page reloads

---

## 🧠 Planned Features

- 🤖 **AI Agent**  
  A future AI assistant that represents *me* and answers visitor questions about:
  - My skills
  - My projects
  - My experience

- 📄 **CV Downloader**
  - Downloadable CV (PDF)
  - Auto-updated from database content

---

## 🛠️ Tech Stack

### Backend
- **Laravel**
- **Livewire** (main interaction layer)
- Eloquent ORM
- Laravel Authentication & Authorization

### Frontend
- **Blade**
- **Tailwind CSS**
- Minimal JavaScript (only where necessary)

### Database
- SQLite (development)
- MySQL compatible (production)

### Tooling
- Vite
- Composer
- npm

---

## 🧩 Architecture Philosophy

- Server-driven UI using Livewire
- Clear separation between:
  - Business logic
  - UI components
  - Data models
- Easy to extend (React / API ready if needed later)

This makes the project **scalable**, **maintainable**, and **future-proof**.

---

## 📸 Screenshots

> Screenshots will be added soon.

---

## ⚙️ Installation (Local)

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo

composer install
npm install
npm run build

cp .env.example .env
php artisan key:generate
php artisan migrate --seed

php artisan serve
