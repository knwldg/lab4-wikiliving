<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Users Control</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- parte para escrever artigo -->

<form action="editUser.php" method="post">

<div class="col-lg-8 col-md-8 col-sd-8" id="user123">
    <table width="100%" class="table table-striped table-bordered table-hover"
           id="dataTables-example">
        <thead>
        <tr>
            <th><a href="listUsers.php?sort=u">Username</a></th>
            <th><a href="listUsers.php?sort=d">ID Utilizador</a></th>
            <th><a href="listUsers.php?sort=r">Role</a></th>
            <!--<th>actions</th>-->
        </tr>


        </thead>



        <?php

        if(isset($userList)) {

            for($i = 0; sizeof($userList) > $i; $i++) {?>

                <tr>
                    <!--                    <td>--><?//=($userList[$i]['id_users'])?><!--</td>-->
                    <td><?=($userList[$i]['nome_user'])?></td>
                    <td><?=($userList[$i]['id_users'])?></td>
                    <td><select title="role" id="role" name="role">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                        <?php switch($userList[$i]['roles_id_roles']) {

                            case 1:

                                echo('User');
                                break;

                            case 2:
                                echo('Editor');
                                break;

                            case 3:

                                echo('Admin');
                                break;
                        }?></td>

                    <td>
                        <a>

                            <button></button>

                        </a>
                    </td>
                </tr>

                <?php
            }


        }

        ?>

</form>
    </table>
</div>







