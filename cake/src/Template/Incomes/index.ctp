<style>
  /* あとでcssにかく */
  ul>li {
    display: inline;

  }
</style>

<h1>収入を記録する</h1>
<br>

<div class="mb-3">
  <img src="../img/income2.png" alt="">
</div>

<div class="row">
  <button type="submit" class="btn-primary m-3">期間を指定して検索</button>
</div>

<?= $this->Form->create($entity, ['url' => ['action' => 'add']]); ?>
<div class="row">
  <div class="col">
    <?= $this->Form->label('収入日付') ?>
    <input type="date" name="date" required="required">
  </div>
  <div class="col">
    <?= $this->Form->control('price', ['label' => '収入額']); ?>
  </div>

  <div class="col">
    <?= $this->Form->label('収入理由') ?>
    <select class="padding:0" name="reason_id">
      <?php foreach ($reasons as $reason) : ?>
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
        <th scope="col">編集&nbsp;/&nbsp;削除</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($incomes as $income) : ?>
        <tr>
          <td id="id"><?= h($income->id) ?></td>
          <td id="date"><?= h($income->date) ?></td>
          <td id="price">￥<?= number_format($income->price) ?></td>
          <td>
            <?= h($income->reason->name) ?>
          </td>

          <td>
            <div class="row">
              <?= $this->Form->create($income, ['url' => ['action' => 'edit']]) ?>
              <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i></button>
              <?= $this->Form->end(); ?>
              &nbsp;&nbsp;
              <?= $this->Form->create($income, ['url' => ['action' => 'delete']]) ?>
              <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
              <?= $this->Form->end(); ?>
            </div>
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

<!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal">
  <div class="row" style="margin-top:100px;">
    <h1>編集モード<i class="fas fa-pencil-alt"></i></h1>
    <input type="date" name="" id="">
    <input type="text" name="" id="">
    <input type="text" name="" id="">
    <div class="col-2">
      <a href="#" rel="modal:close" class="btn btn-outline-danger">Close</a>
    </div>
    <div class="col-2">
      <a href="#" rel="modal:close" class="btn btn-outline-primary">Submit</a>
    </div>
  </div>
</div>

<!-- Link to open the modal -->
<p><a href="#ex1" rel="modal:open" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a></p>


<script>
  $(function() {

    //
    console.log('HELLO');
    const h1 = document.querySelector('h1');
    const id = document.
    const copy = h1.cloneNode(true);
    console.log(copy);

  });
</script>