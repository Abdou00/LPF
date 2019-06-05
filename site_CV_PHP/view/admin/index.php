<?php require_once('../../inc/adminHeader.inc.php'); var_dump($competences); ?>
    <div id="content-wrapper">
    <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Skills Table
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Level</th>
                            <th>Logo</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tbody>
                        <?php foreach($competences as $skill) : ?>
                            <tr>
                                <td><?php echo $skill->name; ?></td>
                                <td><?php echo $skill->capacite; ?></td>
                                <td><?php echo $skill->photo; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Experiences Table
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Poste</th>
                            <th>Ville</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tbody>
                        <?php foreach($experiences as $e) : ?>
                            <tr>
                                <td><?php echo $e->nomEntreprise; ?></td>
                                <td><?php echo $e->date; ?></td>
                                <td><?php echo $e->poste; ?></td>
                                <td><?php echo $e->ville; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Projects Table
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Poste</th>
                            <th>Ville</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tbody>
                        <?php foreach($formations as $f) : ?>
                            <tr>
                                <td><?php echo $f->nomFormation; ?></td>
                                <td><?php echo $f->date; ?></td>
                                <td><?php echo $f->poste; ?></td>
                                <td><?php echo $f->ville; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php require_once('../../inc/adminFooter.inc.php'); ?>
