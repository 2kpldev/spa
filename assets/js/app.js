
function print() {
  var printContents = document.getElementById('print_content').innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;
  setTimeout(function() {
    this.close();
    locatoin='';
  }, 1000);
  window.print();
  document.body.innerHTML = originalContents;
}


// delete function
function _deteteMenu(e){
  Notiflix.Confirm.Show( 'ສະຖານະ', 'ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່ ?', 'ຕົກລົງ', 'ຍົກເລີກ',
  function(){
    window.location='menu.php?del='+e;
  },
  function(){
  } );
}