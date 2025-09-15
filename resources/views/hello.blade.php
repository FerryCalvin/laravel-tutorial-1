<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Hello {{ $name }}</title>
</head>
<body>
  <header>
    <h1>Hello, {{ $name }}</h1>
    <p>Welcome to your new page. This is a minimal HTML template without CSS.</p>
  </header>

  <main>
    <section>
      <h2>About</h2>
      <p>This page demonstrates a simple semantic structure: header, main, and footer.</p>
    </section>

    <section>
      <h2>Say Hello</h2>
      <p>If you want, add more content here — text, images, links, or forms.</p>
    </section>
  </main>

  <footer>
    <p>&copy; <span id="year"></span> Your Name</p>
  </footer>

  <script>
    // small script to fill the current year (optional)
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
