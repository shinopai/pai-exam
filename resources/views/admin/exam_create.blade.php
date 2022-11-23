@extends('layouts.admin') @section('content')
<div class="exam-list">
  <div class="exam-list__inner">
    <div class="wrap">
      <div class="exam-list__head flex">
        <h2 class="exam-list__head-heading">新規検定作成</h2>
      </div>
      <div class="exam-list__body">
        <form action="{{ route('exams.post') }}" method="post" class="exam-list__form" name="examForm">
          @csrf
          <div class="exam-list__form-item">
            <label for="title" class="exam-list__form-label">検定名</label>
            <input type="text" name="title" class="exam-list__form-input--text" id="title" value="{{ old('title') }}" placeholder="検定名" />
          </div>
          <div class="exam-list__form-item">
            <label for="exam-date" class="exam-list__form-label">検定実施期間</label>
            <div class="flex">
              <input type="date" name="start_date" class="exam-list__form-input--date" id="exam-date" value="{{ old('start_date') }}" />
              <span>～</span>
              <input type="date" name="end_date" class="exam-list__form-input--date" id="exam-date" value="{{ old('end_date') }}" />
            </div>
          </div>
          <div class="exam-list__form-item">
            <label for="category" class="exam-list__form-label">検定</label>
            <input type="radio" name="category" class="exam-list__form-input--radio" id="mental" value="暗算" />
            <label for="mental">暗算</label>
            <input type="radio" name="category" class="exam-list__form-input--radio" id="abacus" value="珠算" />
            <label for="abacus">珠算</label>
          </div>
          <div class="exam-list__form-item">
            <label for="type" class="exam-list__form-label">検定の種類</label>
            <input type="radio" name="type" class="exam-list__form-input--radio" id="normal" value="通常検定" />
            <label for="normal">通常検定</label>
            <input type="radio" name="type" class="exam-list__form-input--radio" id="special" value="特別検定" />
            <label for="special">特別検定</label>
          </div>
          <div class="exam-list__form-item flex">
            <button type="button" class="cancel-btn" onclick="event.preventDefault();cancelForm();">
              キャンセル
            </button>
            <input type="submit" value="確認" class="exam-list__form-input--submit" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- script -->
<script src="{{ mix('js/app.js') }}"></script>
@endsection
