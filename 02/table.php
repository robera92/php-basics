<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Hours</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($hours as $key=>$value):

         foreach($hours[$key]['workingHours'] as $k=>$v): ?>
           <tr>
                <th scope="row"><?=$key;?></th>
                <td><?=$value['firstName'].' '.$value['lastName'];?></td>
                <td><?=$k;?></td>
                <td><?=$v;?></td>
            </tr>
        <?php endforeach;
     endforeach; ?>
  </tbody>
</table>

