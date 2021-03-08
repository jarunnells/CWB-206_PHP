<?php
  /** @var PDO $db */
  $q = 'DESCRIBE new_player_tmp;';
  $tbl_desc = $db->query($q);
  $result = $tbl_desc->fetchAll(PDO::FETCH_ASSOC);
  //var_dump($result);
?>
      <section class="output_table_desc">
        <p>Connection <span class="success">SUCCESSFUL</span>!</p>
        <div class="describe">
          <div class="query">
            <code><span class="keyword">DESCRIBE</span> ashland.new_player_tmp;</code>
          </div>
          <div class="desc_tbl">
            <table>
              <thead>
              <tr>
                <th>Field</th>
                <th>Type</th>
                <th>Null</th>
                <th>Key</th>
                <th>Default</th>
              </tr>
              </thead>
              <tbody>
              <?php /* @var $result */ foreach ($result as $col) : ?>
                <tr>
                  <td><?php echo $col['Field'] ?></td>
                  <td><?php echo $col['Type'] ?></td>
                  <td><?php echo $col['Null'] ?></td>
                  <td><?php echo $col['Key'] ?></td>
                  <td><?php echo $col['Default'] ?? 'NULL' ?></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
              <tfoot></tfoot>
            </table>
          </div>
        </div>
        <div id="footer">
          <p class="copyright">&copy; <?php echo date("Y"); ?> Aims Community College</p>
        </div>
      </section>
