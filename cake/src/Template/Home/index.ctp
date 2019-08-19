
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
      <th class="table-warning" scope="row"><h4>収入トータル</h4></th>
      <td><h4>￥<?= number_format($income) ?></h4></td>
    </tr>
    <th class="table-warning" scope="row"><h4>支出トータル</h4></th>
      <td><h4>￥<?= number_format($spending) ?></h4></td>
    </tr>
    <th class="table-warning" scope="row"><h4>収支合計</h4></th>
      <td><h4>￥<?= number_format($income-$spending) ?></h4></td>
    </tr>
  </tbody>
</table>