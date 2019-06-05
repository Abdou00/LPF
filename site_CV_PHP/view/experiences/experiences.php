<?php require_once('inc/header.inc.php');?>


    <div class="section" id="experience">
        <div class="container cc-experience">
            <div class="h4 text-center mb-4 title">Experience</div>
            <?php foreach ($experiences as $ex) : ?>
            <div class="card">
            <div class="row">
                <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                    <p><?php echo htmlentities($ex->date);?></p>
                    <div class="h5">
                        <?php echo htmlentities($ex->nomEntreprise);?>
                    </div>
                </div>
                </div>
                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                    <div class="h5"><?php echo htmlentities($ex->poste);?></div>
                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
                </div>
                </div>
            </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>

<?php
    if(userConnect()){
?>
    <!-- <div style="margin-left:21%;">
    <a href="exp.php?op=new">Ajouter experience</a>
    </div> -->

    <button type="button" class="btn btn-success" style="margin-left:21%;"><a href="exp.php?op=new" style="color:white;">Ajouter experience</a></button>

    <table class="contacts">
        <thead>
            <tr>
                <th>Entreprise</th>
                <th>Date</th>
                <th>Poste</th>
                <th>ville</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($experiences as $ex) : ?>
            <tr>
                <td>
                    <a href="exp.php?op=show&id=<?php echo $ex->id_experiences; ?>">
                        <?php echo htmlentities($ex->nomEntreprise);?>
                    </a>
                </td>
                <td><?php echo htmlentities($ex->date);?></td>
                <td><?php echo htmlentities($ex->poste);?></td>
                <td><?php echo htmlentities($ex->ville);?></td>
                <td>
                <button type="button" class="btn btn-success"><a href="exp.php?op=delete&id=<?php echo $ex->id_experiences; ?>" style="color:white;">
                        Delete
                    </a></button>
                </td>
                <td>
                <button type="button" class="btn btn-success"><a href="exp.php?op=update&id=<?php echo $ex->id_experiences; ?>"  style="color:white;">
                        Edite
                    </a></button>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php
    }
?>

