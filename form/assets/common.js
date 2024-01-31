$(function() {
  $(".btn2").on('click', function() {
      $(".hid-contents2").slideToggle(500, alertFunc)
  });
  function alertFunc() {
      if ($(this).css('display') == 'block') {
          $("#btn-txt2").text("　× 店舗削除")
      } else {
          $("#btn-txt2").text("▼ 2店舗目追加")
      }
  }
});
$(function() {
  $(".btn3").on('click', function() {
      $(".hid-contents3").slideToggle(500, alertFunc)
  });
  function alertFunc() {
      if ($(this).css('display') == 'block') {
          $("#btn-txt3").text("　× 店舗削除")
      } else {
          $("#btn-txt3").text("▼ 3店舗目追加")
      }
  }
});
$(function() {
  $(".btn4").on('click', function() {
      $(".hid-contents4").slideToggle(500, alertFunc)
  });
  function alertFunc() {
      if ($(this).css('display') == 'block') {
          $("#btn-txt4").text("　× 店舗削除")
      } else {
          $("#btn-txt4").text("▼ 4店舗目追加")
      }
  }
});
$(function() {
  $(".btn5").on('click', function() {
      $(".hid-contents5").slideToggle(500, alertFunc)
  });
  function alertFunc() {
      if ($(this).css('display') == 'block') {
          $("#btn-txt5").text("　× 店舗削除")
      } else {
          $("#btn-txt5").text("▼ 5店舗目追加")
      }
  }
});
$(function() {
  var inputs = $('input');
  var checked = inputs.filter(':checked').val();
  inputs.on('click', function() {
      if ($(this).val() === checked) {
          $(this).prop('checked', !1);
          checked = ''
      } else {
          $(this).prop('checked', !0);
          checked = $(this).val()
      }
  })
})
