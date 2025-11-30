<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Kuliah Luar Negeri' }}</title>
    <!-- CSS Bootstrap / app.css -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('partials.navbar')

    <!-- Main Content -->
    <main>
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
      <div class="container">
        <p class="text-muted mb-0">&copy; 2025 Kuliah Luar Negeri. All rights reserved.</p>
      </div>
    </footer>

</body>
</html>
