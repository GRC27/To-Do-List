<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1>To-Do List</h1>
      <div class="form">
        <form action="add.php" method="post">
          <!-- <input type="text" name="task" class="task" placeholder="Your Task" /> -->
          <textarea
            name="task"
            id="task"
            class="task"
            cols="29"
            rows="13"
            placeholder="Your Task"
          ></textarea>
          <button type="submit" class="button-submit" multiline="true">
            Add
          </button>
        </form>
      </div>
      <div class="sticky-notes">
        <?php include "show_task.php"; ?>
      </div>
    </div>
  </body>
</html>
