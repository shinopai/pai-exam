<form action="{{ route('exams.destroy', ['exam' => $exam->id]) }}" method="POST" class="modal-content" id="modal_destroy_confirm{{ $exam->id }}">
  @csrf
  @method(('delete'))
  <h3 class="modal-content__heading">{{ $exam->title }}</h3>
  <p class="modal-content__txt">
    「<span>{{ $exam->title }}</span>」を削除しようとしています。<br />検定を削除すると戻すことができなくなります。よろしいですか？
  </p>
  <div class="modal-content__footer flex">
    <button type="button" class="cancel-btn">
      キャンセル
    </button>
    <input type="submit" value="削除する" class="modal-content__btn delete" />
  </div>
</form>
