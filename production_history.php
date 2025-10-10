<?php
  require_once __DIR__ . '/init/init.php';

  // --- Fetch all shows, sorted by year descending ---
  $stmt = $pdo->prepare("SELECT show_title, show_year, show_link FROM shows ORDER BY show_year DESC, show_title ASC");
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $shows_by_year = array();
  if ($rows && count($rows) > 0) {
      foreach ($rows as $row) {
          $year = $row['show_year'];
          if (!isset($shows_by_year[$year])) {
              $shows_by_year[$year] = array();
          }
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
          <div class="row mt-3 slide-in-right">
            <div class="col-12 text-end">
              <h1 class="display-3">Production History</h1>
            </div>
          </div>
          <div  class="showList">
            <?php foreach ($shows_by_year as $year => $shows): ?>
            <h2 id="year-<?php echo $year; ?>"><?php echo $year; ?></h2>
            <table class="table table-borderless tFix my-1 mx-3">
              <tbody>
                <?php foreach ($shows as $show): ?>
                  <tr>
                    <td><?php echo htmlspecialchars($show['show_title']); ?></td>
                    <td>
                      <?php if (!empty($show['show_link'])): ?>
                        <a href="<?php echo htmlspecialchars($show['show_link']); ?>" target="_blank">View Cast</a>
                      <?php else: ?>
                        
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
