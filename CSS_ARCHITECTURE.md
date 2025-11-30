# 📚 Dokumentasi Arsitektur CSS - Laravel Bootstrap Project

## 🏗️ Struktur Folder

```
resources/css/
├── app.css                          # ⭐ Main entry point (import semua modul)
│
├── base/                            # 🎨 Foundation styles
│   ├── _variables.css              # CSS custom properties (colors, spacing, etc)
│   ├── _reset.css                  # CSS reset & base HTML styles
│   └── _typography.css             # Font & text utilities
│
├── components/                      # 🧩 Reusable UI components
│   ├── _navbar.css                 # Navigation bar
│   ├── _buttons.css                # All button variants
│   ├── _badges.css                 # Badge components (trust, journey)
│   └── _cards.css                  # Card components (service, step, country)
│
├── layout/                          # 📐 Layout structures
│   ├── _grid.css                   # Custom grid system (5-column)
│   ├── _sections.css               # Section layouts (stats, etc)
│   └── _container.css              # Container customizations
│
├── pages/                           # 📄 Page-specific styles
│   ├── _hero.css                   # Hero section
│   ├── _planning.css               # Planning/Search section
│   ├── _services.css               # Services section
│   ├── _journey.css                # Journey steps section
│   └── _countries.css              # Countries section
│
├── utilities/                       # 🛠️ Helper classes
│   ├── _helpers.css                # Utility classes (flex, gap, etc)
│   └── _responsive.css             # Mobile/tablet responsive overrides
│
└── animations/                      # ✨ Animation definitions
    └── _keyframes.css              # @keyframes animations
```

## 📋 Penjelasan Setiap Folder

### 1. **base/** - Foundation Styles
File-file dasar yang menjadi fondasi seluruh aplikasi.

- **`_variables.css`**: Semua CSS custom properties (--primary-blue, --padding-md, dll)
- **`_reset.css`**: Reset CSS dan base styles untuk HTML/body
- **`_typography.css`**: Utilities untuk text (gradient text, dll)

### 2. **components/** - UI Components
Komponen UI yang reusable dan bisa dipakai di berbagai halaman.

- **`_navbar.css`**: Sticky navbar, brand, nav links
- **`_buttons.css`**: Semua varian button (primary, consultation, explore, dll)
- **`_badges.css`**: Trust badge, journey badge
- **`_cards.css`**: Service cards, step cards, country cards

### 3. **layout/** - Layout Structures
Struktur layout yang mengatur tata letak halaman.

- **`_grid.css`**: Custom grid system (5-column untuk journey steps)
- **`_sections.css`**: Layout untuk sections (stats section, dll)
- **`_container.css`**: Customization Bootstrap container

### 4. **pages/** - Page-Specific Styles
Styles yang spesifik untuk setiap section/halaman.

- **`_hero.css`**: Hero section dengan title, subtitle, buttons
- **`_planning.css`**: Planning/search box dengan overlapping effect
- **`_services.css`**: Services section container
- **`_journey.css`**: Journey steps section + gradient backgrounds
- **`_countries.css`**: Countries section dengan header decoration

### 5. **utilities/** - Helper Classes
Utility classes yang membantu development.

- **`_helpers.css`**: Helper classes (flex-center, gap utilities, dll)
- **`_responsive.css`**: Semua responsive overrides untuk mobile/tablet

### 6. **animations/** - Animations
Definisi animasi yang digunakan di seluruh aplikasi.

- **`_keyframes.css`**: fadeInUp, fadeInRight, scroll animations

## 🎯 Best Practices

### 1. **CSS Variables Best Practice**

```css
/* ✅ GOOD - Gunakan semantic naming */
:root {
    --primary-blue: #0052FF;
    --text-dark: #1E1E1E;
    --padding-md: 14px;
    --transition-base: all 0.3s ease;
}

/* ✅ GOOD - Gunakan variables di seluruh aplikasi */
.button {
    background: var(--primary-blue);
    padding: var(--padding-md);
    transition: var(--transition-base);
}

/* ❌ BAD - Hardcode values */
.button {
    background: #0052FF;
    padding: 14px;
}
```

### 2. **Override Bootstrap Best Practice**

```css
/* ✅ GOOD - Override dengan specificity yang tepat */
.navbar-custom {
    background-color: var(--light-blue);
    /* Override Bootstrap navbar */
}

/* ✅ GOOD - Gunakan !important hanya untuk font-family */
:root {
    --bs-body-font-family: 'Montserrat', sans-serif !important;
}

/* ❌ BAD - Terlalu banyak !important */
.button {
    color: red !important;
    padding: 10px !important;
}
```

### 3. **File CSS Besar di Laravel + Vite**

```css
/* ✅ GOOD - Modular imports */
@import "./base/_variables.css";
@import "./components/_buttons.css";

/* ✅ GOOD - Gunakan relative paths dengan ./ */
@import "./pages/_hero.css";

/* ❌ BAD - Satu file besar */
/* Semua CSS dalam satu file app.css */
```

### 4. **Naming Conventions**

```css
/* ✅ GOOD - BEM-like naming */
.hero-section { }
.hero-title { }
.hero-subtitle { }

.service-card { }
.service-icon { }
.service-title { }

/* ✅ GOOD - Prefix untuk modifiers */
.btn-primary { }
.btn-consultation { }
.btn-explore { }

/* ❌ BAD - Generic names */
.title { }
.box { }
.item { }
```

### 5. **Responsive Design**

```css
/* ✅ GOOD - Mobile-first approach */
.hero-title {
    font-size: 24px; /* Mobile */
}

@media (min-width: 768px) {
    .hero-title {
        font-size: 52px; /* Desktop */
    }
}

/* ✅ GOOD - Centralized responsive styles */
/* Semua responsive overrides di utilities/_responsive.css */
```

## 🚀 Cara Menggunakan

### Menambah Component Baru

1. Buat file baru di folder `components/`:
```bash
touch resources/css/components/_modal.css
```

2. Tulis styles:
```css
/* components/_modal.css */
.modal-custom {
    background: white;
    border-radius: var(--radius-lg);
    padding: var(--padding-xl);
}
```

3. Import di `app.css`:
```css
@import "./components/_modal.css";
```

### Menambah Page Baru

1. Buat file baru di folder `pages/`:
```bash
touch resources/css/pages/_about.css
```

2. Tulis styles:
```css
/* pages/_about.css */
.about-section {
    padding: 80px 0;
    background: var(--gray-bg);
}
```

3. Import di `app.css`:
```css
@import "./pages/_about.css";
```

### Menambah Utility Class

1. Edit `utilities/_helpers.css`:
```css
/* utilities/_helpers.css */
.bg-gradient-primary {
    background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
}
```

## 📊 Keuntungan Arsitektur Ini

### ✅ Modular & Maintainable
- Setiap file punya tanggung jawab spesifik
- Mudah mencari dan mengubah styles
- Tidak perlu scroll ratusan baris

### ✅ Scalable
- Mudah menambah component/page baru
- Struktur folder yang jelas
- Tidak ada konflik naming

### ✅ Reusable
- Component bisa dipakai di berbagai halaman
- Variables konsisten di seluruh aplikasi
- DRY (Don't Repeat Yourself)

### ✅ Team-Friendly
- Developer lain mudah memahami struktur
- Bisa kerja parallel tanpa konflik
- Dokumentasi yang jelas

### ✅ Performance
- Vite bisa optimize dengan baik
- Tree-shaking untuk unused CSS
- Faster build times

## 🔧 Maintenance Tips

### Update Variables
Semua perubahan warna/spacing cukup di `base/_variables.css`:
```css
:root {
    --primary-blue: #0052FF; /* Ubah di sini saja */
}
```

### Refactor Component
Jika ada duplikasi, extract ke component baru:
```css
/* Sebelum - duplikasi */
.hero-button { padding: 14px 25px; }
.cta-button { padding: 14px 25px; }

/* Sesudah - reusable */
.btn-base { padding: var(--padding-md) 25px; }
```

### Debug Responsive
Semua responsive styles ada di `utilities/_responsive.css`, mudah di-debug.

## 📝 Catatan Penting

1. **Prefix dengan underscore (_)**: File modular menggunakan `_` prefix (convention SASS/SCSS)
2. **Import order matters**: Base → Layout → Components → Pages → Utilities → Animations
3. **Gunakan variables**: Selalu gunakan CSS variables, jangan hardcode values
4. **Mobile-first**: Tulis mobile styles dulu, lalu desktop overrides
5. **Semantic naming**: Gunakan nama yang descriptive dan meaningful

## 🎓 Resources

- [CSS Architecture Guide](https://www.smashingmagazine.com/2018/05/guide-css-layout/)
- [BEM Methodology](http://getbem.com/)
- [CSS Variables](https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties)
- [Vite CSS](https://vitejs.dev/guide/features.html#css)

---

**Dibuat dengan ❤️ untuk project Laravel + Bootstrap yang lebih maintainable**
