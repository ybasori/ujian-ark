<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <p class="text-right"><a class="btn btn-warning open-modal-add text-white font-weight-bold" href="javascript:void(0)">ADD</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Nmae</th>
                        <th class="text-center">Salary</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($works as $name){ ?>
                    <tr>
                        <td class="font-weight-bold text-center"><?= $name->name ?></td>
                        <td class="font-weight-bold text-center">Rp <?= number_format($name->salary,0,",",".") ?></td>
                        <td class="text-center"><a class="text-danger h3" href="<?= site_url("work/delete/".$name->id) ?>"><i class="fas fa-trash-alt"></i></a> <a href="javascript:void(0)" class="open-modal-edit text-success h3" data-i="<?=$name->id?>" data-name="<?= $name->name ?>" data-salary_id="<?= $name->salary_id ?>"><i class="fas fa-edit"></i></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>