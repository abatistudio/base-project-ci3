<div id="formlogin" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

  <div class="w3-center">
    <span onclick="formLogin('hide')" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
    <img src="images/img_avatar4.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
  </div>

  <form class="w3-container">
    <div class="w3-section">
      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Username" name="username" required>
      <input class="w3-input w3-border" type="password" placeholder="Password" name="password" required>
      <!-- <input class="w3-button w3-block w3-green w3-section w3-padding"  type="submit" name="login" value="Login"> -->
      <button onclick="userin()" class="w3-button w3-block w3-green w3-section w3-padding">Login</button>
      <input class="w3-check w3-margin-top" type="checkbox"> Remember me
    </div>
  </form>

  <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
    <button onclick="formLogin('hide')" type="button" class="w3-button w3-red">Cancel</button>
    <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
  </div>

  </div>
</div>