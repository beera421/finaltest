<?php include 'view/header.php'; ?>

<html>
<body>

  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="color:black">Make Entry</h1>
      </div>
    </div>
  </div>

  <div class="container" style="width:45%;position: relative;left: -10%;background: #F08080;padding: 8px 10px 8px 12px;color: #000000;border-radius: 7px;">> 
    <form method="post" action="index.php" >
      <div class="form-group">
        <label>Task:</label>
        <input type="text" name="task" class="form-control" id="task" placeholder="Enter Task">
      </div>
      <div class="form-group">
        <label>Start Date:</label>
        <input type="date" name="createddate" class="form-control" id="createddate" >
      </div>
      <div class="form-group">
        <label>Due Date:</label>
        <input type="date" name="duedate" class="form-control" id="duedate">
      </div>
      <div class="form-group">
        <input type="submit" value="Add New Task" class="btn btn-default" />
      </div>
    </form>
  </div>

</body>
</html>
<?php include 'view/footer.php'; ?>
