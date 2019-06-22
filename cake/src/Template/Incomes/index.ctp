<style>
    /* あとでcssにかく */
    ul > li {
        display:inline;
        
    }
</style>

<h1>収入を記録する</h1>
<br>

<div class="mb-3">
    <img src="../img/income2.png" alt="">
</div>

<?= $this->Form->create($entity,['url'=>['action'=>'add']]); ?>
    <div class="row">
        <div class="col">
        <?= $this->Form->label('収入日付') ?>
        <input type="date" name="date" required="required">
        </div>
        <div class="col">
        <?= $this->Form->control('price', ['placeholder' => '10,000','label'=>'収入額']); ?>
        </div>

        <div class="col">
            <?= $this->Form->label('収入理由') ?>
            <select class="padding:0" name="reason_id">
            <?php foreach($reasons as $reason): ?>
            <option style="fontsize:5px" value=<?= $reason->id ?>><?= $reason->name ?></option>
            <?php endforeach; ?>
            </select>
        </div>

        <div class="col">
        <button type="submit" class="btn btn-outline-warning" style="margin-top:30px;">収入を記録</button>
            <?= $this->Form->end(); ?> 
        </div>
    </div>


<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">日付</th>
                <th scope="col">収入額</th>
                <th scope="col">収入理由</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($incomes as $income): ?>
                <tr>
                    <td><?=h($income->id) ?></td>
                    <td><?=h($income->date) ?></td>
                    <td>￥<?=h($income->price) ?></td>
                    <td>
                        <?=h($income->reason->name) ?>
                </td>
                </tr>
            <?php endforeach; ?> 
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
<div class="row">
    <!-- incomes priceのSUMを表示 -->
    <h1></h1>
</div>