<a href="create">create</a>
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
      <form action="update" method="post">
        <input type="hidden" value="<?=$joke["id"]?>" name="id">
      <td><button class="btn btn-primary">Update</button><a href="delete/<?=$joke["id"]?>" class="btn btn-danger">Delete</a></td></form>
    </tr>
    <?php }?>
  </tbody>
</table>

