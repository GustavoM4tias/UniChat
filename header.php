<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/f9e03bc8f7.js"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");

    html,
    body {
      width: 100%;
      height: 100%;
      margin: 0;
      font-family: "Hind", sans-serif;
      background-color: transparent;
    }

    .search-bar {
      position: fixed;
      display: flex;
      align-items: center;
      background-color: #00294b;
      text-align: center;
      padding: 1em;
      height: 48px;
      width: 100vw;
      top: 0;
      justify-content: space-between;
      z-index: 1001;
    }

    .titulo {
      font-weight: bold;
      font-size: 60px;
      color: white;
      flex: 1;
      text-align: center;
      margin-right: 50px;
    }

    .menu-icon {
      display: flex;
      flex-direction: column;
      justify-content: center;
      width: 4em;
      cursor: pointer;
      margin-top: 0.5em;
    }

    .bar {
      width: 80%;
      background-color: #fff;
      margin-bottom: 0.5em;
      border-radius: 2em;
      padding: 0.3em;
    }

    .titulo {
      font-weight: bold;
      font-size: 40px;
      color: white;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    }

    .menu-checkbox {
      display: none;
    }

    .options-menu {
      display: none;
      left: -200px;
    }

    .show {
      display: flex;
      flex-direction: column;
      position: absolute;
      overflow-y: auto;
      top: 5em;
      left: 0;
      width: 20em;
      height: 100vh;
      background-color: #073052;
      overflow-y: auto;
      box-shadow: inset -1px -3px 10px 1px rgba(0, 0, 0, 0.2);
      z-index: 1000;
    }

    .options-menu button {
      display: inline-block;
      text-decoration: none;
      background-color: transparent;
      border: none;
      cursor: pointer;
      color: #ffffff;
      text-decoration: none;
      padding: 0.3em;
      font-size: 26px;
      width: 100%;
      height: 2.5em;
      font-weight: 800;
      text-align: start;
    }

    .options-menu i {
      margin-left: 10px;
    }

    .options-menu button:hover {
      background-color: #014d8b;
    }

    .menu-checkbox:not(:checked)+.options-menu .options-menu-item:hover {
      display: none;
    }

    @media screen and (max-width: 768px) {
      .titulo {
        font-size: 30px;
        margin-right: 30px;
      }

      .show {
        width: 15em;
      }

      .options-menu button {
        font-size: 22px;
      }
    }
  </style>
  <title>header</title>
</head>

<body>
  <header>
    <nav class="search-bar">
      <label for="menu-checkbox" class="menu-icon">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </label>
      <p class="titulo"></p>
      <input type="checkbox" id="menu-checkbox" class="menu-checkbox" />
      <div class="options-menu">
        <a href="perfil.php">
          <button id="perfil"><i class="fa-solid fa-user"></i>
            <?php echo $username; ?>
          </button>
        </a>
        <a href="index.php">
          <button id="chat"><i class="fa-solid fa-users"></i> Chat
            Principal</button>
        </a>
        <a href="calendario.php">
          <button id="calendario"><i class="fa-solid fa-book"></i>
            Calendário</button>
        </a>
        <a href="feedback.php">
          <button id="feedback"><i class="fa-solid fa-receipt"></i>
            Feedback</button>
        </a>
        <a href="https://unimar.br">
          <button id="encaminharSite"><i class="fa-solid fa-desktop"></i> Site</button>
        </a>
        <a class="logout" href="logout.php">
          <button id="logout"><i class="fa-solid fa-right-from-bracket"></i>
            Logout</button>
        </a>
      </div>
    </nav>
  </header>

  <script>
    $(document).ready(function () {
      $('.menu-icon').click(function () {
        $('.options-menu').toggleClass('show');
      });

      $(document).on('click', function (e) {
        if (!$(e.target).closest('.search-bar').length) {
          $('.options-menu').removeClass('show');
        }
      });
    });
  </script>
</body>

</html>