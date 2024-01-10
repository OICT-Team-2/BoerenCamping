<!-- regel 2 tot 4 is hoe je een component include -->
<?php
  include("header.php")
?>
  <img id="bghome" src="images/background_homescreen.png" alt="Background Image" />

  <div class="reservationBar">
    <form class="form" action="reservation-form.php" method="post">
      <div class="formItem">
        <label for="aantal">Aantal Personen</label>
        <select name="aantal" id="aantal">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>

      <div class="formItem">
        <label for="accomedatie"> Accomedatie Type</label>
        <select name="type" id="type">
          <option value="Standaard Plaats">Standaard Plaats</option>
          <option value="Luxe Plaats">Luxe Plaats</option>
          <option value="Camperplaats">Camperplaats</option>
        </select>
      </div>

      <div class="formItem">
        <label for="aankomstdatum">aankomstdatum:</label>
        <input type="datetime-local" id="aankomst" name="aankomst" />
      </div>
      <div class="formItem">
        <label for="vertrekdatum">vertrekdatum:</label>
        <input type="datetime-local" id="vertrek" name="vertrek" />
      </div>

      <div class="zoekbutton formItem">
        <input type="submit" value="Reserveren">
      </div>
    </form>
  </div>
 
<?php
  include("footer.php")
?>