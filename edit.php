<?php
include('head.php');
require_once "bootstrap.php";
require_once "./entities/Book.php";
require_once "./entities/Author.php";
require_once "./entities/User.php";

$Book = $entityManager->find('Book',$_GET['id_Edit']);
if (isset($_POST['btnSubmit']) && $_POST['btnSubmit'] == "edit") {
    $NameBook = $_POST['NameBook'];
    $description = $_POST['description'];
    $getPublishedDate =$_POST['getPublishedDate'];
    // string change to dateTime
    $date = new \DateTime($getPublishedDate);
    $books = $entityManager->find('Book', $Book->getId());
    $author=$Book->getAuthor();
    if ($books === null) {
        echo "Product $Book->getId() does not exist.\n";
        exit(1);
    } else {
        $books->setName($NameBook);
        $books->setDescription($description);
        $books->setPublishedDate($date);
        $books->setAuthor($author);
        $entityManager->flush();
        header("Location: allbook.php");
    }
}
?>
    <div class="col-md-2">

    </div>
    <div class="col-md-4">
        <form action="" method="POST">
            <div class="form-group ">
                <label for="formGroupExampleInput">ID</label>
<!--                <input type="text" class="form-control" id="id" value="">-->
                <input class="form-control" type="text" placeholder="<?php echo $Book->getId() ?>" readonly>

            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">NameBook</label>
                <input type="text" class="form-control" id="NameBook" name="NameBook"
                       value="<?php echo $Book->getName() ?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="<?php echo $Book->getDescription() ?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Date</label>
                <input type="text" class="form-control" id="getPublishedDate" name="getPublishedDate"
                       value="<?php echo $Book->getPublishedDate()->format('Y/m/d')?>">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" name="btnSubmit" value="edit" type="submit">Cập nhật</button>
            </div>
        </form>
    </div>
    <div class="col-md-2">

    </div>
<?php include('footer.php'); ?>