<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $projects->getId() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php echo $projects->getAuthorId() ?></td>
    </tr>
    <tr>
      <th>Text:</th>
      <td><?php echo $projects->getText() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $projects->getStatus() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $projects->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $projects->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('project/edit?id='.$projects->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('project/index') ?>">List</a>
