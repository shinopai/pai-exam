@extends('layouts.admin') @section('content')
<div class="exam-list">
  <div class="exam-list__inner">
    <div class="wrap">
      <div class="exam-list__head flex">
        <h2 class="exam-list__head-heading">新規検定作成</h2>
      </div>
      <div class="exam-list__body">
        <form action="{{ route('exams.officialPost') }}" method="POST">
          @csrf
          <table class="exam-list__table">
            <tbody>
              <tr>
                <th>検定名</th>
                <td>{{ $input["title"] }}</td>
              </tr>
              <tr>
                <th>実施期間</th>
                <td>{{ $input["start_date"] }}～{{ $input["end_date"] }}</td>
              </tr>
              <tr>
                <th>検定</th>
                <td>{{ $input["category"] }}</td>
              </tr>
              <tr>
                <th>検定の種類</th>
                <td>{{ $input["type"] }}</td>
              </tr>
            </tbody>
          </table>
          <div class="exam-list__table-lower flex">
            <button type="button" class="cancel-btn" onclick="cancelInput();">
              キャンセル
            </button>
            <div class="flex">
              <input type="submit" value="修正" class="basic-btn" name="fix" />
              <input type="submit" value="登録" class="basic-btn register" name="register" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- script -->
<script src="{{ mix('js/app.js') }}"></script>
@endsection
