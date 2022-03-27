
<!DOCTYPE html>
<html>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body>
    <div class="container">
        <div class="col-sm-6">
            <br>
            <center><h2><b><i class="text-danger">STUDENT DOCUMENT CHECKUP</i><b></h2><br></center>
        <form action="form-land.php" method="post" enctype="multipart/form-data">
        <label for="name" class="from-label">Enter Your Name:</label><br>
        <input type="text" id="name" class="form-control" name="name" value=""><br>
        <label for="email" class="from-label">Enter Your Email:</label><br>
        <input type="text" id="email" class="form-control" name="email" value=""><br>
        <label for="phone" class="from-label">Enter Your Phone No:</label><br>
        <input type="number" id="phone" class="form-control" name="phone" value=""><br><br>
        <label for="fileToUpload" class="from-label">Upload Your Documents : </label><br>
        <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" ><br><br>
        <input type="submit" value="SUBMIT" class=" form-control bth btn-danger" name="submit">
    </form>
</div>
</div>
</body>

</html>