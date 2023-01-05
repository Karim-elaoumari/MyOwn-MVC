<a href="public/create.php">create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Joke</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $joke){?>
    <tr>
      <th scope="row">1</th>
      <td><?= $joke["value"]?></td>
      <td><?= $joke["datetime"]?></td>
      <td><a href="" class="btn btn-primary">Update</a><a href="" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>

