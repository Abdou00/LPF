<?php require_once('inc/header.inc.php');?>

<div class="section" id="skill">
    <div class="container">
        <div class="h4 text-center mb-4 title">Professional Skills</div>
        <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="card-body">
            <div class="row">
                <?php foreach ($competences as $co) : ?>

            <div class="col-md-6">
                <div class="progress-container progress-primary"><span class="progress-badge"><a href="comp.php?op=show&id=<?php echo $co->id_competences; ?>">
                            <?php echo htmlentities($co->name);?>
                        </a></span>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo htmlentities($co->capacite);?>%;"></div>
                </div>
                </div>
            </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>
</div>

<?php
if(userConnect()){
?>
<div>
<button type="button" class="btn btn-success" style="margin-left:21%;"><a href="comp.php?op=new" style="color:white;">Ajouter competence</a></button>
</div>
<table class="contacts">
        <thead>
            <tr>
                <th>Nom</th>
                <th>level</th>
                <th>photo</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($competences as $co) : ?>
            <tr>
                <td>
                    <a href="comp.php?op=show&id=<?php echo $co->id_competences; ?>">
                        <?php echo htmlentities($co->name);?>
                    </a>
                </td>
                <td><?php echo htmlentities($co->capacite);?></td>
                <td><?php echo htmlentities($co->photo);?></td>
                <td>
                <button type="button" class="btn btn-success"><a href="comp.php?op=delete&id=<?php echo $co->id_competences;?>" style="color:white;">
                        Delete
                    </a></button>
                </td>
                <td>
                <button type="button" class="btn btn-success"><a href="comp.php?op=update&id=<?php echo $co->id_competences;?>" style="color:white;">
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

