@extends('layouts.admin') @section('content')
<div class="exam-list">
  <!-- モーダル用オーバーレイ -->
  <div id="modal_overlay"></div>
  <div class="wrap">
    <div class="exam-list__inner">
      <div class="exam-list__head flex">
        <h2 class="exam-list__head-heading">検定一覧</h2>
        <a href="{{ route('exams.create') }}" class="exam-list__head-link">新規検定作成</a>
      </div>
      <div class="exam-list__body">
        @foreach ($exams as $exam)
        <div class="exam-list__item">
          <div class="exam-list__item-upper">
            <span @class(['type-label' , 'normal'=> $exam->type == '通常検定', 'special' => $exam->type == '特別検定'])>{{ str_replace('検定', '', $exam->type) }}</span>
            <span class="date-label">{{ $exam->start_date }}</span>
            <p class="cat-txt">
              <span>検定&nbsp;:&nbsp;</span>{{ $exam->category }}
            </p>
          </div>
          <div class="exam-list__item-lower flex">
            <h2 class="title">{{ $exam->title }}</h2>
            <div class="btns flex">
              <button class="btn">受講生管理</button>
              <button class="btn detail-modal-open" data-id="{{ $exam->id }}">検定詳細</button>
              <!-- 検定詳細モーダル内容 -->
              @include('partial.detail_modal', ['exam' => $exam])
              <button class="btn">検定チケット</button>
              <button class="btn delete destroy-confirm-modal-open" data-id="{{ $exam->id }}">検定削除</button>
              <!-- 削除確認モーダル内容 -->
              @include('partial.destroy_confirm_modal', ['exam' => $exam])
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
