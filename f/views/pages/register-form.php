
<div class="w-50 mx-auto" style="margin-bottom:40px !important;">
<h2 class="ChakraPetch">Créer un compte</h2>
<form method="POST">
  <div class="form-group" >
    <label for="exampleInputEmail1" class="ChakraPetch">Nom Complet</label>
    <input type="text" name="nom_complet" class="form-control ChakraPetch" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom Complet">
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1" class="ChakraPetch">Email</label>
    <input type="text" name="email" class="form-control ChakraPetch" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1" class="ChakraPetch">Telephone</label>
    <input type="text" name="telephone" class="form-control ChakraPetch" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone">
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1" class="ChakraPetch">Adresse</label>
    <input type="text" name="adresse" class="form-control ChakraPetch" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse">
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1" class="ChakraPetch">Ville</label>
    <input type="text" name="ville" class="form-control ChakraPetch" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ville">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="ChakraPetch">Password</label>
    <input type="password" name="password" class="form-control ChakraPetch" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="ChakraPetch">Je suis</label>
    <select class="form-control ChakraPetch" name="role">
      <option value="marchand">marchand</option>
      <option value="unité de production">unité de production</option>
      <option value="artisan">artisan</option>
      <option value="coopérative">coopérative</option>
      <option value="Grossisste">Grossisste</option>
    </select>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label ChakraPetch" for="exampleCheck1">J'ai lu les conditions d'utilisation</label>
  </div>
  <button type="submit"  name="submit" class="btn btn-primary ChakraPetch">Submit</button>
  <div >
    <p class="ChakraPetch">Vous avez déja un compte? <a href="login" class="ChakraPetch">Connectez-vous</a><p>
  </div>
</form>
</div>