<style>
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
    <?= $this->Form->label('支出日付') ?>
    <input type="date" name="date" required="required">
  </div>
  <div class="col">
    <?= $this->Form->label('支出額') ?>
    <input type="text" name="price" required="required">
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
        <th scope="col">編集&nbsp;/&nbsp;削除</th>
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
              <p><a href="#ex1" rel="modal:open" class="btn btn-warning"><i class="fas fa-edit"></i></a></p>
              <!-- 編集モーダル実装 -->
              <div id="ex1" class="modal" style="height:80%">
                <div class="row justify-content-center" style="margin-top:50px;">

                  <?= $this->Form->create($entity, ['url' => ['action' => 'edit']]); ?>


                  <div class="row">
                  <div class="col" style="padding:15px;">
                    <h1 class="margin-bottom:10px;">編集モード<i class="fas fa-pencil-alt"></i></h1>
                    <input type="hidden" name="id" value="<?= $spending->id ?>">
                    <?= $this->Form->label('支出日付') ?>
                    <input type="date" name="date" required="required">
                  </div>
                </div>

                  <div class="row">
                      <div class="col" style="padding:15px;">
                      <?= $this->Form->label('支出額') ?>
                       <input type="text" name="price" required="required">
                      </div>
                  </div>

                  <div class="row">
                    <div class="col" style="padding:15px;">
                    <?= $this->Form->label('用途') ?>
                      <input type="text" name="description" required="required">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <button type="submit" class="btn btn-outline-primary" style="margin-top:30px;">支出を記録</button>
                      <?= $this->Form->end(); ?>
                    </div>
                  </div>
                </div>
             </div>
              <!-- ここまで -->

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