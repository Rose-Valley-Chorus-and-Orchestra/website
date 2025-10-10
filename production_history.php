<?php
  require_once __DIR__ . '/../init/init.php';

  // --- Fetch all shows, sorted by year descending ---
  $sql = "SELECT show_name, show_year, show_link FROM shows ORDER BY show_year DESC, show_name ASC";
  $result = $conn->query($sql);

  // --- Organize shows by year ---
  $shows_by_year = [];
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          $year = $row['show_year'];
          $shows_by_year[$year][] = $row;
      }
  }
?>

<!doctype html>
<html>
  <?php include 'includes/head.php'; ?>
  <body>
    <?php include 'includes/header.php'; ?>



    <main>
      <div class="container">
        <div id="content">
          <h1 id="pageName">Production History<a name="top" id="top"></a></h1>
          <div  class="showList">
            <?php foreach ($shows_by_year as $year => $shows): ?>
            <h2 id="year-<?php echo $year; ?>"><?php echo $year; ?></h2>
            <table>
              <thead>
                <tr>
                  <th>Show Name</th>
                  <th>Link</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($shows as $show): ?>
                  <tr>
                    <td><?php echo htmlspecialchars($show['show_name']); ?></td>
                    <td>
                      <?php if (!empty($show['show_link'])): ?>
                        <a href="<?php echo htmlspecialchars($show['show_link']); ?>" target="_blank">View</a>
                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          <?php endforeach; ?>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/scripts.php'; ?>
</body>
</html>
