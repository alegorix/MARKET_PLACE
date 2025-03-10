<?php
include('head.php');
include('nav.php');
?>
<main class="container">
    
<h1>Création de votre compte</h1>


<form>
<div class="mb-3">
    <label for="nom" class="form-label">Votre nom</label>
    <input type="text" class="form-control" id="nom" name="nom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Votre prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</main>
<?php include('footer.php');?>