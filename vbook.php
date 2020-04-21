<?php
require_once "bootstrap.php";
require_once "./entities/Book.php";
require_once "./entities/Author.php";
require_once "./entities/User.php";
$bookRepository = $entityManager->getRepository('Book');
$Books = $bookRepository->findAll();
?>
<form method="get" action="" >
    <table class="table table-bordered">
        <thead class="thead-dark">
        <thead class="thead-dark">
        </a>
        <tr>
            <th scope="col"></th>
            <th scope="col">id</th>
            <th scope="col">TenSach</th>
            <th scope="col">TacGia</th>
            <th scope="col">Nxb</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        </thead>
        <?php

        foreach ($Books as $Book) {
//            echo sprintf("-%s\n", $Book->getTacGia());
            echo '
							<tr>
							    <td>
							    <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" name="myCheckbox[]" class="form-check-input" value='. $Book->getId() .'>
                                  </label>
                                </div>
                                </td>
						        <td>' . $Book->getId(). '</td>
				                <td>' . $Book->getName() . '</td>
				                <td>' . $Book->getDescription(). '</td>
				                <td>' . $Book->getPublishedDate() ->format('d/m/Y'). '</td>
				                <td class="text-center">
				                <a class="btn btn-info btn-xs" href="edit.php?id_Edit=' . $Book->getId() . '">
				                <span class="glyphicon glyphicon-edit"></span> Edit</a>
				                <a href="delete.php?id=' . $Book->getId() . '" class="btn btn-danger btn-xs">
				                <span class="glyphicon glyphicon-remove"></span> Del</a>
				                </td>
			                </tr>';
        }
        ?>
    </table>
    <input type="submit" name="submit-form" value="DELETE"/>
</form>