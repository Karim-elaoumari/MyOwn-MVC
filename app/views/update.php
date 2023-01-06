
<form  action="" method="POST" class="row g-3">
 
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Joke Text</label>
    <input type="text" class="form-control" placeholder="type your joke" value="<?=$data["value"]?>" name="JokeValue">
    <input type="hidden"  value="<?=$data["id"]?>" name="JokeId">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="updateJoke">Update</button>
  </div>
</form>