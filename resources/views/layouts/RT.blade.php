<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- ICONS -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <!-- STYLESHEET -->
  <link rel="stylesheet" href="navbarstyle.css" />
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">


  @vite('resources/js/app.js')
  <style>
    body {
      background-color: #d5f5d3;
      /* Warna hijau muda */
    }
  </style>
</head>

<body>

  @include('partials.navbarRT')

  <div class="container mt-4 container-custom">
    @yield('content')
  </div>

  <!-- Jquery -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var menuItems = document.querySelectorAll('.menu > ul > li');

      menuItems.forEach(function(item) {
        item.querySelector('a').addEventListener('click', function(e) {
          e.preventDefault(); // Prevent default action

          // Toggle active class on the clicked item
          item.classList.toggle('active');

          // Toggle sub-menu visibility
          var subMenu = item.querySelector('.sub-menu');
          if (subMenu) {
            if (subMenu.style.display === 'block') {
              subMenu.style.display = 'none';
            } else {
              subMenu.style.display = 'block';
            }
          }

          // Close other sub-menus
          menuItems.forEach(function(otherItem) {
            if (otherItem !== item) {
              otherItem.classList.remove('active');
              var otherSubMenu = otherItem.querySelector('.sub-menu');
              if (otherSubMenu) {
                otherSubMenu.style.display = 'none';
              }
            }
          });
        });
      });

      // Click event for menu button
      document.querySelector('.menu-btn').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
      });
    });
  </script>
  <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>