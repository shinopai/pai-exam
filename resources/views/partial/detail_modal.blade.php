<div class="modal-content" id="modal_detail{{ $exam->id }}">
  <h3 class="modal-content__heading">{{ $exam->title }}</h3>
  <table class="modal-content__table">
    <tbody>
      <tr>
        <th>検定実施期間</th>
        <td>{{ $exam->start_date }}～{{ $exam->end_date }}</td>
      </tr>
      <tr>
        <th>検定</th>
        <td>{{ $exam->category }}</td>
      </tr>
      <tr>
        <th>検定の種類</th>
        <td>{{ $exam->type }}</td>
      </tr>
    </tbody>
  </table>
</div>
