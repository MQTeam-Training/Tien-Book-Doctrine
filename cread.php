<?php
include('head.php');
require_once "bootstrap.php";
require_once "./entities/Book.php";
require_once "./entities/Author.php";
require_once "./entities/User.php";

$authorRepository = $entityManager->getRepository('Author');
$Authors = $authorRepository->findAll();
$userRepository = $entityManager->getRepository('User');
$Users = $userRepository->findAll();
if (isset($_POST['btnSubmit']) && $_POST['btnSubmit'] == "edit") {
    $NameBook = $_POST['NameBook'];
    $description = $_POST['description'];
    $getPublishedDate =$_POST['getPublishedDate'];
    // string change to dateTime
    $date = new \DateTime($getPublishedDate);
//    $author=(integer)$_POST['Author'];
    $author=1;
    $user=$_POST['User'];

    $books = new Book($NameBook,$description,$date,$author,$user);
    $entityManager->persist($books);
    $entityManager->flush();
    header("Location: allbook.php");
}
?>
    <div class="col-md-2">

    </div>
    <div class="col-md-4">
        <form action="" method="POST">
            <div class="form-group">
                <label for="formGroupExampleInput">NameBook</label>
                <input type="text" class="form-control" id="NameBook" name="NameBook"
                       value="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Date</label>
                <input type="text" class="form-control" id="getPublishedDate" name="getPublishedDate"
                       value="">
            </div>
            <label for="formGroupExampleInput">Author</label>
                <select class="form-control" id="Author" name="Author">
                    <?php
                    foreach ($Authors as $Author) {
                        echo '<option>' . $Author->getId() . '</option>';
                    }
                    ?>
                </select>
            <label for="formGroupExampleInput">User</label>
            <select class="form-control" id="User" name="User">
                <?php
                foreach ($Users as $User) {
                    echo '<option>' . $User->getId() . '</option>';
                }
                ?>
            </select>
            <div class="form-group" style="padding-top: 10px">
                <button class="btn btn-primary" name="btnSubmit" value="edit" type="submit">Cập nhật</button>
            </div>
        </form>
    </div>
    <div class="col-md-2">

    </div>
<?php include('footer.php'); ?>
