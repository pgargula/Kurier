<div class="header">
    <h2 class="logo"> KURIER4G</h2>
      <input type="checkbox" id="chk" onclick="menusp()">
      <label for="chk" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
      </label>
      <ul class="menu">
        <a href="../views/Startowa.php">Home</a>
        <a href="../views/Sledzenie.php">ŚLEDZENIE</a>
        <a href="../views/PanelKuriera.php">DOSTEPNE PRZESYLKI</a>
        <a href="../views/mojepaczkiKurier.php">MOJE PACZKI</a>
        <a href="../php/logout.php">WYLOGUJ</a>
        <span class="navbar-text">
          WITAJ: <?php echo $_SESSION['login'];?>
        </span>
        <label for="chk" class="hide-menu-btn">
          <i class="fas fa-times"></i>
        </label>
      </ul>
    </div> 