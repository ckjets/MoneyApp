<style>
  /* あとでcssにかく */
  ul>li {
    display: inline;
  }

  .modal a.close-modal {
    top: -1.5px;
    right: -1.5px;
  }

  #submitmb p {
    display: none;
  }

  #formmb input[type="date"] {
    display: none;
  }


  #formmb input[type="text"] {
    display: none;
  }


  #formmb select {
    display: none;
  }


  #formmb div .col {
    display: none;
  }

  #formmb label {
    display: none;
  }

  @media (max-width: 768px) {
    #submitbutton button {
      margin-left: 100px;
    }

    .pagination ul>li {
      margin-left: 100px;

    }

    .paginater {
      margin-left: 100px;
    }

    #formpc input[type="date"] {
      display: none;
    }


    #formpc input[type="text"] {
      display: none;
    }


    #formpc select {
      display: none;
    }


    #formpc div .col {
      display: none;
    }

    #formpc label {
      display: none;
    }

    #submitmb p {
      display: block;
      padding-bottom: 30px;
    }
  }
</style>

<h1>収入を記録する</h1>
<br>

<div class="mb-3">
  <img src="../img/income2.png" alt="">
</div>

<div class="row">
  <p><a href="#ex2" rel="modal:open" type="submit" class="btn-primary m-3 p-3">期間を指定して検索</a></p>
</div>

<div id="formpc">
  <?= $this->Form->create($entity, ['url' => ['action' => 'add']]); ?>
  <div class="row">
    <div class="col">
      <?= $this->Form->label('収入日付') ?>
      <input type="date" name="date" required="required">
    </div>
    <div class="col">
      <?= $this->Form->label('収入額') ?>
      <input type="text" name="price" required="required">
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
      <div id="submitbutton">
        <button type="submit" class="btn btn-outline-warning" style="margin-top:30px;"><a>収入を記録</a></button>
      </div>
      <?= $this->Form->end(); ?>
    </div>
  </div>
</div>
<!-- 768px以下は、モーダルでレコード追加 -->
<div id="submitmb">
  <p><a href="#ex3" rel="modal:open" class="btn btn-warning">収入を記録</a></p>
  <!-- 編集モーダル実装 -->
  <div id="formmb">
    <div id="ex3" class="modal" style="height:100%">
      <div class="row justify-content-center" style="margin-top:30px">
        <h2>収入を追加する</h2>
        <?= $this->Form->create($entity, ['url' => ['action' => 'add']]); ?>
        <div class="row">
          <?= $this->Form->label('収入日付') ?>
          <input type="date" name="date" required="required">
        </div>
        <div class="row">
          <?= $this->Form->label('収入額') ?>
          <input type="text" name="price" required="required">
        </div>

        <div class="row">
          <?= $this->Form->label('収入理由') ?>
          <select class="padding:0" name="reason_id">
            <?php foreach ($reasons as $reason) : ?>
              <option style="fontsize:5px" value=<?= $reason->id ?>><?= $reason->name ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="row">
          <div id="submitbutton">
            <button type="submit" class="btn btn-outline-warning" style="margin-top:30px;"><a>収入を記録</a></button>
          </div>
          <?= $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ここまで -->
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
              <p><a href="#ex1" rel="modal:open" class="btn btn-warning"><i class="fas fa-edit"></i></a></p>

              <!-- 編集モーダル実装 -->
              <div id="ex1" class="modal" style="height:80%">
                <div class="row justify-content-center" style="margin-top:50px;">

                  <?= $this->Form->create($entity, ['url' => ['action' => 'edit']]); ?>


                  <div class="row">
                    <div class="col" style="padding:15px;">
                      <h1 class="margin-bottom:10px;">編集モード<i class="fas fa-pencil-alt"></i></h1>
                      <input type="hidden" name="id" value="<?= $income->id ?>">
                      <?= $this->Form->label('収入日付') ?>
                      <input type="date" name="date" required="required">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col" style="padding:15px;">
                      <?= $this->Form->label('収入額') ?>
                      <input type="text" name="price" required="required">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col" style="padding:15px;">
                      <?= $this->Form->label('収入理由') ?>
                      <select class="padding:0" name="reason_id">
                        <?php foreach ($reasons as $reason) : ?>
                          <option style="fontsize:5px" value=<?= $reason->id ?>><?= $reason->name ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <button type="submit" class="btn btn-outline-warning" style="margin-top:30px;">収入を記録</button>
                      <?= $this->Form->end(); ?>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ここまで -->

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
      <p><?= $this->Paginator->numbers() ?></p>
    </ul>
  </div>
</div>

<div id="ex2" class="modal">
  <div class="row" style="margin-top:100px;">
    <div class="row">
      <h1>日付を指定する</h1>
    </div>
    <div class="col-6">
      <p>FROM</p>
      <input type="date">
    </div>
    <div class="col-6">
      <p>TO</p>
      <input type="date">
    </div>
    <div class="col-2">
      <a href="#" rel="modal:close" class="btn btn-outline-danger">Close</a>
    </div>
    <div class="col-2">
      <a href="#" rel="modal:close" class="btn btn-outline-primary">Submit</a>
    </div>
  </div>
</div>