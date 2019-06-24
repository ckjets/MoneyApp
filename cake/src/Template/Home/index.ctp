
<!-- 収入理由によってグラフ化できたらよき -->


<!-- 6月の収支 (2019-06-01 - 2019-06-30)<br>
当月収入<br>
当月支出<br>
当月収支<br> -->

<h1 class="mb-3">お小遣い管理アプリ</h1>

<div class="mb-3">
    <img src="../img/home.png" alt="">
</div>

<table class="table table-bordered">
  <tbody>
    <tr>
      <th class="table-warning" scope="row"><h2>収入トータル</h2></th>
      <td><h2>￥<?php echo $income ?></h2></td>
    </tr>
    <th class="table-warning" scope="row"><h2>支出トータル</h2></th>
      <td><h2>￥<?php echo $spending ?></h2></td>
    </tr>
    <th class="table-warning" scope="row"><h2>収支合計</h2></th>
      <td><h2>￥<?= $income-$spending ?></h2></td>
    </tr>
  </tbody>
</table>