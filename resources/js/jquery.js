$(function(){
  var modalOverlay = $('#modal_overlay');
  var detailModalOpen = $('.detail-modal-open');
  var destroyConfirmModalOpen = $('.destroy-confirm-modal-open');

  // 検定詳細モーダル
  // モーダルを表示
  detailModalOpen.on('click', function(){
    $('#modal_overlay').css('display', 'block');
    $('#modal_detail' + $(this).data('id')).css('display', 'block');
  })
  // モーダルを閉じる
  modalOverlay.click(function(){
    $(this).css('display', 'none');
    $('.modal-content').css('display', 'none');
  })

  // 検定削除確認モーダル
  // モーダルを表示
  destroyConfirmModalOpen.on('click', function(){
    $('#modal_overlay').css('display', 'block');
    $('#modal_destroy_confirm' + $(this).data('id')).css('display', 'block');
  })
  // モーダルを閉じる
  modalOverlay.click(function(){
    $(this).css('display', 'none');
    $('.modal-content').css('display', 'none');
  })
  $('.modal-content .cancel-btn').click(function(){
    modalOverlay.css('display', 'none');
    $('.modal-content').css('display', 'none');
  })
})
