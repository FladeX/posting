<h1>Projectss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Author</th>
      <th>Text</th>
      <th>Status</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($projectss as $projects): ?>
    <tr>
      <td><a href="<?php echo url_for('project/show?id='.$projects->getId()) ?>"><?php echo $projects->getId() ?></a></td>
      <td><?php echo $projects->getAuthorId() ?></td>
      <td><?php echo $projects->getText() ?></td>
      <td><?php echo $projects->getStatus() ?></td>
      <td><?php echo $projects->getCreatedAt() ?></td>
      <td><?php echo $projects->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('project/new') ?>">New</a>
