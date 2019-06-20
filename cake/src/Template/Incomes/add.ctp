
<?= $this->Form->create($entity,['url'=>['action'=>'add']]); ?>
    <div class="row">
        <div class="col">
        <?= $this->Form->control('date', ['type'=>'date','monthNames' => false,'label'=>'収入日付']); ?>
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
            <?= $entity ?>
    </div>