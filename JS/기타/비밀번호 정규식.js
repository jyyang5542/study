$(function () {
  // 메소드 작성(반드시 필요하지는 않음)
  $.fn.conditionTrue = function () {
    $(this).removeClass('false').addClass('true');
  }
  $.fn.conditionFalse = function () {
    $(this).removeClass('true').addClass('false');
  }

  // 초기 세팅
  $('.input_info.error p').conditionFalse();

  // 비밀번호 입력시 keyup으로 작동
  $('input:password').on('keyup', function () {
    var errorMessage = $(this).parent().parent().siblings().children('p');
    var password = $(this).val();
    var validate_1 = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,20}$/;
    var validate_2 = /(\w)\1\1/;
    function validate_3(str, limit) {
      var o, d, p, n = 0, l = limit == null ? 4 : limit;
      for (var i = 0; i < str.length; i++) {
        var c = str.charCodeAt(i);
        if (i > 0 && (p = o - c) > -2 && p < 2 && (n = p == d ? n + 1 : 0) > l - 3) return false;
        d = p, o = c;
      }
      return true;
    }
    // 8~20자의 영문, 숫자, 특수문자 조합으로 입력
    if (!validate_1.test(password)) errorMessage.eq(0).conditionFalse();
    else errorMessage.eq(0).conditionTrue();

    // 3자리 이상 반복 또는 연속되는 영문/숫자 사용 불가
    if (validate_2.test(password) || !validate_3(password, 3)) errorMessage.eq(1).conditionFalse();
    else errorMessage.eq(1).conditionTrue();
  });
});