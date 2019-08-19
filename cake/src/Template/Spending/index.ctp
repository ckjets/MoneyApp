<style>
    /* あとでcssにかく */
    ul>li {
        display: inline;

    }
</style>

<h1>支出を記録する</h1>
<br>

<div class="mb-3">
    <img src="../img/spending.png" alt="">
</div>

<?= $this->Form->create($entity, ['url' => ['action' => 'add']]); ?>
<div class="row">
    <div class="col">
        <?= $this->Form->label('収入日付') ?>
        <input type="date" name="date" required="required">
    </div>
    <div class="col">
        <?= $this->Form->control('price', ['label' => '支出額']); ?>
    </div>
    <div class="col">
        <?= $this->Form->label('用途') ?>
        <input type="text" name="description" required="required">
    </div>
    <div class="col">
        <button type="submit" class="btn btn-outline-primary" style="margin-top:30px;">支出を記録</button>
    </div>
</div>
<?= $this->Form->end(); ?>


<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">日付</th>
                <th scope="col">支出額</th>
                <th scope="col">用途</th>
                <th  scope="col">編集&nbsp;/&nbsp;削除</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($spendings as $spending) : ?>
                <tr>
                    <td><?= $spending->id ?></td>
                    <td><?= h($spending->date) ?></td>
                    <td>￥<?= number_format($spending->price) ?></td>
                    <td><?= h($spending->description) ?></td>
                    <td>
                        <div class="row">
                            <?= $this->Form->create($spending, ['url' => ['action' => 'edit']]) ?>
                            <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            <?= $this->Form->end(); ?>
                            &nbsp;&nbsp;
                            <?= $this->Form->create($spending, ['url' => ['action' => 'delete']]) ?>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            <?= $this->Form->end(); ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
</div>

<div class="row justify-content-md-center">
    <div class="paginator">
        <ul class="pagination">

            <?= $this->Paginator->numbers() ?>

        </ul>
    </div>
</div>