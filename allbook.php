<?php
use Doctrine\ORM\Query\ResultSetMapping;

include('head.php');
require_once "bootstrap.php";
require_once "./entities/Book.php";
require_once "./entities/Author.php";
require_once "./entities/User.php";
if(isset($_COOKIE['user_id'])){
    $queryBuilder = $conn1->createQueryBuilder();
    $queryBuilder->select('*')->from('book');
    $stm = $queryBuilder->execute();
    $data = $stm->fetchAll();
    $coll = collect($data);
    $sorted = $coll->sortBy('publishedDate');

}else{
    $url=$_SERVER['SCRIPT_NAME'];
    header("Location: login.php?tientran=$url");
}
if (isset($_GET['btnSubmit']) && $_GET['btnSubmit'] == "search") {
    $queryBuilder = $conn1->createQueryBuilder();
    $queryBuilder->select('*')->from('book')->where("name LIKE '%$_GET[nameSach]%'");;
    $stm = $queryBuilder->execute();
    $data = $stm->fetchAll();
    if(count($data)==0){
        $queryBuilder = $conn1->createQueryBuilder();
        $queryBuilder->select('*')->from('book')->where("description LIKE '%$_GET[nameSach]%'");;
        $stm = $queryBuilder->execute();
        $data = $stm->fetchAll();
    }
    $coll = collect($data);
    $sorted = $coll->sortBy('publishedDate');
}
?>
<style>
body{
    background: white;
    width: 1000px;
    padding-top: 200px;
    margin: 0 auto;
}

</style>
<form method="get" style="padding-bottom: 50px">
    Tên Sach : <input type="text" name="nameSach"/>
    Ngày Xuất Bản : <input type="date" data-date="" data-date-format="YYYY MMMM DD" name="StarTime">
    <input type="date" data-date-format="YYYY MMMM DD" name="TimeEnd">
    <input type="submit" name="btnSubmit" value="search"/>
</form>
<!--    <a href="#" class="btn btn-info btn-lg" style="margin-bottom: 10px">-->
<!--        <span class="glyphicon glyphicon-plus"></span> Plus-->
<!--    </a>-->
<form method="get" action="" >
    <table class="table table-bordered">
        <thead class="thead-dark">
        <thead class="thead-dark">
        </a>
        <tr>
            <th scope="col"></th>
            <th scope="col">id</th>
            <th scope="col">TenSach</th>
            <th scope="col">MoTa</th>
            <th scope="col">Nxb</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($sorted as $Book) {
            echo '
							<tr>
							    <td>
							    <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" name="myCheckbox[]" class="form-check-input" value='. $Book['id'] .'>
                                  </label>
                                </div>
                                </td>
						        <td>' . $Book['id']. '</td>
				                <td>' . $Book['name'] . '</td>
				                <td>' . $Book['description']. '</td>
				                <td>' . $Book['publishedDate']. '</td>
				                <td class="text-center">
				                <a class="btn btn-info btn-xs" href="edit.php?id_Edit=' . $Book['id']  . '">
				                <span class="glyphicon glyphicon-edit"></span> Edit</a>
				                <a href="delete.php?id=' . $Book['id']  . '" onclick="return confirm(\'bạn có muốn xóa !\'); " class="btn btn-danger btn-xs">
				                <span class="glyphicon glyphicon-remove"></span> Del</a>
				                </td>
			                </tr>';
        }

        ?>
<?php include ('footer.php'); ?>
