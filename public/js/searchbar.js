var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if (date < 10) {
  date = '0' + date;
}
if (month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
  checkoutElem.setAttribute("min", this.value);
}

$(".drop-down .selected span").click(function () {
  $(".drop-down .options ul").toggle();
});
$(".drop-down .options ul li a").click(function () {
  var text = $(this).html();
  $(".drop-down .selected span").html(text);
  $(".drop-down .options ul").hide();
});
$(document).bind('click', function (e) {
  var $clicked = $(e.target);
  if (!$clicked.parents().hasClass("drop-down"))
    $(".drop-down .options ul").hide();
});

function DropDown(el) {
  this.dd = el;
  this.placeholder = this.dd.children('span');
  this.opts = this.dd.find('ul.drop li');
  this.val = '';
  this.index = -1;
  this.initEvents();
}

DropDown.prototype = {
  initEvents: function () {
    var obj = this;
    obj.dd.on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      $(this).toggleClass('active');
    });
    obj.opts.on('click', function () {
      var opt = $(this);
      obj.val = opt.text();
      obj.index = opt.index();
      obj.placeholder.text(obj.val);
      opt.siblings().removeClass('selected');
      opt.filter(':contains("' + obj.val + '")').addClass('selected');
    }).change();
  },
  getValue: function () {
    return this.val;
  },
  getIndex: function () {
    return this.index;
  }
};

$(function () {
  // create new variable for each menu
  var dd1 = new DropDown($('#noble-gases'));
  // var dd2 = new DropDown($('#other-gases'));
  $(document).click(function () {
    // close menu on document click
    $('.wrap-drop').removeClass('active');
  });
});