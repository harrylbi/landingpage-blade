# SCSS Modular Structure

This project uses a modular SCSS architecture for better organization and maintainability.

## Directory Structure

```
resources/scss/
├── app.scss                 # Main entry point (imports all modules)
├── base/
│   ├── _variables.scss      # Color palette, spacing, transitions, etc.
│   └── _global.scss         # Global styles and CSS custom properties
├── layout/
│   ├── _navbar.scss         # Navigation bar styles
│   ├── _hero.scss           # Hero section and search box
│   └── _footer.scss         # Footer with newsletter
├── components/
│   ├── _buttons.scss        # All button variants
│   ├── _cards.scss          # Service, step, and country cards
│   ├── _forms.scss          # Form elements
│   └── _carousel.scss       # Swiper carousel styles
├── pages/
│   ├── _journey.scss        # Journey steps section
│   ├── _countries.scss      # Countries section
│   └── _services.scss       # Services section
└── utilities/
    ├── _animations.scss     # Keyframe animations and gradients
    └── _responsive.scss     # Media queries and responsive styles
```

## Features

### ✅ Modular Organization
- Separated concerns by category (base, layout, components, pages, utilities)
- Easy to find and maintain specific styles
- Better code reusability

### ✅ SCSS Features Used
- **Variables**: Centralized color palette, spacing, and other design tokens
- **Nesting**: Cleaner, more readable code structure
- **Partials**: Modular files that compile into one CSS file
- **Imports**: Organized import structure in `app.scss`

### ✅ Benefits
1. **Maintainability**: Easy to update specific components
2. **Scalability**: Simple to add new components or pages
3. **Performance**: Compiles to optimized CSS
4. **Developer Experience**: Better code organization and readability

## Usage

### Development
The SCSS files are automatically compiled by Vite during development:
```bash
npm run dev
```

### Production Build
```bash
npm run build
```

## Customization

### Colors
Edit `base/_variables.scss` to change the color palette:
```scss
$primary-blue: #0052FF;
$secondary-blue: #4169E1;
// ... more colors
```

### Spacing
Modify spacing variables in `base/_variables.scss`:
```scss
$padding-sm: 8px;
$padding-md: 14px;
// ... more spacing
```

### Adding New Components
1. Create a new file in the appropriate directory (e.g., `components/_newComponent.scss`)
2. Add the import to `app.scss`:
```scss
@import 'components/newComponent';
```

## File Naming Convention
- Partial files start with underscore: `_filename.scss`
- Main entry point: `app.scss` (no underscore)
- Use kebab-case for multi-word filenames

## Notes
- The old `resources/css/app.css` file is kept for reference but no longer used
- All styles are now compiled from `resources/scss/app.scss`
- Vite configuration updated to use SCSS
