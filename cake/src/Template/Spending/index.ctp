<style>
    /* あとでcssにかく */
    ul > li {
        display:inline;
        
    }
</style>



<h1>支出を記録する</h1>
<br>

<div class="mb-3">
    <img src="../img/spending.png" alt="">
</div>

<?= $this->Form->create($entity,['action' => 'add']); ?>
    <div class="row">
        <div class="col">
        <?= $this->Form->label('収入日付') ?>
        <input type="date" name="date" required="required">
        </div>
        <div class="col">
            <?= $this->Form->control('price', ['placeholder' => '支出額']); ?>
        </div>
        <div class="col">
            <?= $this->Form->label('用途') ?>
            <input type="text" name="description" required="required">

        </div>
        <div class="col">
            <?= $this->Form->button('支出を記録', ['class' => 'btn btn-outline-primary mt-4']); ?>
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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($spendings as $spending) : ?>
                <tr>
                    <td><?= $spending->id ?></td>
                    <td><?= h($spending->date) ?></td>
                    <td>￥<?= h($spending->price) ?></td>
                    <td><?= h($spending->description) ?></td>
                </tr>
            <?php endforeach; ?>
            <!-- <tr>
                <td>2</td>
                <td>2019/06/01</td>
                <td>1000</td>
                <td>洋服買った</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2019/06/01</td>
                <td>2000</td>
                <td>カラオケ行った</td> -->
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