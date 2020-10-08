
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

function _back(){
  window.history.go(-1);
}

// delete function
function _deteteMenu(e){
  Notiflix.Confirm.Show( 'ສະຖານະ', 'ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່ ?', 'ຕົກລົງ', 'ຍົກເລີກ',
  function(){
    window.location='menu.php?del=' + e;
  },
  function(){
  });
}

function _deteteSubMenu(e,ev){
  Notiflix.Confirm.Show( 'ສະຖານະ', 'ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່ ?', 'ຕົກລົງ', 'ຍົກເລີກ',
  function(){
    window.location='sub_menu.php?del='+ e +'&page='+ ev;
  });
}

function _deteteRank(e){
  Notiflix.Confirm.Show( 'ສະຖານະ', 'ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່ ?', 'ຕົກລົງ', 'ຍົກເລີກ',
  function(){
    window.location='add_rank.php?del=' + e;
  },
  function(){
  });
}

function _deteteStaff(e){
  Notiflix.Confirm.Show( 'ສະຖານະ', 'ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່ ?', 'ຕົກລົງ', 'ຍົກເລີກ',
  function(){
    window.location='staff-list.php?del='+e;
  });
}

function _deteteGroup(e){
  Notiflix.Confirm.Show( 'ສະຖານະ', 'ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່ ?', 'ຕົກລົງ', 'ຍົກເລີກ',
  function(){
    window.location='add_group_course.php?del='+e;
  });
}

<<<<<<< HEAD
function _deteteList(e){
  Notiflix.Confirm.Show( 'ສະຖານະ', 'ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ ຫຼື ບໍ່ ?', 'ຕົກລົງ', 'ຍົກເລີກ',
  function(){
    window.location='detail_list_course.php?del='+e;
  });
}
=======


// preview
function _preview(e){
   $('#preview').modal()
  $.get('preview.php',{e},function(data){
    $('#preview_content').html(data)
  })
}


// =============================
function logout() {
  Notiflix.Confirm.Show(
    "ສະຖານະ",
    "ທ່ານຕ້ອງການອອກຈາກລະບົບນີ້ແທ້ ຫຼື ບໍ່ ?",
    "ຕົກລົງ",
    "ຍົກເລີກ",
    function () {
      window.location = "../../logout.php";
    }
  );
}
>>>>>>> ec78eb4459051fe0c6484360602b9547eba4c201
