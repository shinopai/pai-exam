// formの値リセット
var cancelForm = () => {
  document.examForm.reset();
}

// 確認画面での内容リセット
var cancelInput = () => {
  if(confirm('内容をリセットして宜しいですか？')){
    window.sessionStorage.clear();
    window.location.href = 'http://localhost:8080/admin/exams/create';
  }
}

window.cancelInput = cancelInput;
window.cancelForm = cancelForm;
