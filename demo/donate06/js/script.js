
var receiptdonatorfullname;

// Validate data
function testvalidateData(){

}

function validateData(){
  // get values
  var prefixname;
  if($("#prefixid01").prop("checked")){
    prefixname = "นาย";
  }
  else if ($("#prefixid02").prop("checked")) {
    prefixname = "นาง";
  }
  else if ($("#prefixid03").prop("checked")) {
    prefixname = "นางสาว";
  }
  var fname = $("#fname").val().trim();
  var lname = $("#lname").val().trim();
  var idcard = $("#idcard").val().trim();
  var email = $("#email").val().trim();
  var phone = $("#phone").val().trim();
  var mobile = $("#mobile").val().trim();
  var address = $("#address").val().trim();
  var district = $("#district").val().trim();
  var province = $("#province").val();
  var txtprovince= $("#province :selected").text();
  var postalcode = $("#postalcode").val().trim();
  var amount = $("#amount").val();

  if ($("#receiptaddresstype02").prop("checked")) {
    if ($("#receiptdonatortype01").prop("checked")) {
      var receiptprefixname;
      if($("#receiptprefixid01").prop("checked")){
        receiptprefixname = "นาย";
      }
      else if ($("#receiptprefixid02").prop("checked")) {
        receiptprefixname = "นาง";
      }
      else if ($("#receiptprefixid03").prop("checked")) {
        receiptprefixname = "นางสาว";
      }
      var receiptfname = $("#receiptfname").val().trim();
      var receiptlname = $("#receiptlname").val().trim();
    }
    else if ($("#receiptdonatortype02").prop("checked")) {
      var receiptorgname = $("#receiptorgname").val().trim();
    }

    var receiptemail = $("#receiptemail").val().trim();
    var receiptphone = $("#receiptphone").val().trim();
    var receiptmobile = $("#receiptmobile").val().trim();
    var receiptaddress = $("#receiptaddress").val().trim();
    var receiptdistrict = $("#receiptdistrict").val().trim();
    var receiptprovince = $("#receiptprovince").val();
    var receipttxtprovince= $("#receiptprovince :selected").text();
    var receiptpostalcode = $("#receiptpostalcode").val().trim();
  }

/*
  if (fname == "") {
      alert("โปรดระบุชื่อ");
      $("#fname").focus();
  }
  else if (lname == "") {
      alert("โปรดระบุนามสกุล");
  }
  else {
  }
*/

  if ($("#receiptaddresstype01").prop("checked")) {
    receiptdonatorfullname = "คุณ"+ fname + " " + lname;
    $("#valid_name").html(receiptdonatorfullname);
    $("#valid_address1").html("ที่อยู่ : " + address);
    $("#valid_address2").html(district + " " + txtprovince + " " + postalcode);
    $("#valid_phone").html("โทรศัพท์ (บ้าน) : " + phone);
    $("#valid_mobile").html("โทรศัพท์ (มือถือ) : " + mobile);
  }
  else if ($("#receiptaddresstype02").prop("checked")) {
    if ($("#receiptdonatortype01").prop("checked")) {
      receiptdonatorfullname = "คุณ"+ receiptfname + " " + receiptlname;
    }
    else if ($("#receiptdonatortype02").prop("checked")) {
      receiptdonatorfullname = receiptorgname;
    }
    $("#valid_name").html(receiptdonatorfullname);
    $("#valid_address1").html("ที่อยู่ : " + receiptaddress);
    $("#valid_address2").html(receiptdistrict + " " + receipttxtprovince + " " + receiptpostalcode);
    $("#valid_phone").html("โทรศัพท์ (บ้าน) : " + receiptphone);
    $("#valid_mobile").html("โทรศัพท์ (มือถือ) : " + receiptmobile);

  }
  $('#valid_amount').html("จำนวนเงิน : " + amount);
  $("#modalConfirm").modal("show");

}


function addRecord() {

    var fname = $("#fname").val();
    fname = fname.trim();
    var lname = $("#lname").val();
    lname = lname.trim();
    var idcard = $("#idcard").val();
    idcard = idcard.trim();
    var email = $("#email").val();
    email = email.trim();
    var phone = $("#phone").val();
    phone = phone.trim();

    alert("hello");

    $.post("ajax/uploadfile.php",{
      fname: fname,
      lname: lname,
      email: email
    }, function(data, status){
      alert(data);
      $("#modalConfirm").removeClass("fade").modal("hide");
      $("#modalSuccess").addClass("fade").modal("show");
    });
}

function addRecord2(){

      var form = ("#reqForm");
      var formData = new FormData(document.getElementById("reqform"));

      $.ajax({
          url: "ajax/addrecord.php",
          type: "POST",
          data: formData,
          success: function (data) {
              alert(data);
              $("#modalConfirm").removeClass("fade").modal("hide");
              $("#modalSuccess").addClass("fade").modal("show");
          },
          cache: false,
          contentType: false,
          processData: false
      });
}


function getProvince() {
    $.get("ajax/getprovince.php", {}, function (data, status) {
        $("#province").html(data);
        $("#receiptprovince").html(data);
    });
}

function resetInputData(){
  $("#prefixid01").prop("checked",false);
  $("#prefixid02").prop("checked",false);
  $("#prefixid03").prop("checked",false);
  $("#fname").val("");
  $("#lname").val("");
  $("#idcard").val("");
  $("#email").val("");
  $("#phone").val("");
  $("#mobile").val("");
  $("#address").val("");
  $("#district").val("");
  $("#province").val("10");
  $("#postalcode").val("");
  $("#amount").val("");
  $("#evidence").val("");

  $("receiptaddresstype01").prop("checked",false);
  $("receiptaddresstype02").prop("checked",false);
  $("receiptdonatortype01").prop("checked",false);
  $("#receiptprefixid01").prop("checked",false);
  $("#receiptprefixid02").prop("checked",false);
  $("#receiptprefixid03").prop("checked",false);
  $("#receiptprefixid01").prop("checked",false);
  $("#receiptprefixid02").prop("checked",false);
  $("#receiptprefixid03").prop("checked",false);
  $("#receiptfname").val("");
  $("#receiptlname").val("");
  $("#receiptemail").val("");
  $("#receiptphone").val("");
  $("#receiptmobile").val("");
  $("#receiptaddress").val("");
  $("#receiptdistrict").val("");
  $("#receiptprovince").val("10");
  $("#receiptpostalcode").val("");

}

$("#btnConfirm").on("click", function () {
    //alert("success");
    $("#receivename").html("เรียน คุณ" + receiptdonatorfullname);
    $("#modalConfirm").removeClass("fade").modal("hide");
    $("#modalSuccess").addClass("fade").modal("show");
    resetInputData();
    //addRecord2();
});


$("#evidence").on("change",function(){
  if(this.files[0].size > 524288){
     alert("ไฟล์มีขนาดใหญ่เกิน 512KB!");
     this.value = "";
  };
});

$("#receiptaddresstype01").on("click",function(){
  $("#receiptinfo").hide();
});

$("#receiptaddresstype02").on("click",function(){
  $("#receiptinfo").show();
});


$("#receiptdonatortype01").on("click",function(){

  // reset orgname
  $("#receiptorgname").val("");

  // disable orgname input
  $("#receiptorgname").attr("disabled",true);

  // enable person name input
  $("#receiptprefixid01").attr("disabled",false);
  $("#receiptprefixid02").attr("disabled",false);
  $("#receiptprefixid03").attr("disabled",false);
  $("#receiptfname").attr("disabled",false);
  $("#receiptlname").attr("disabled",false);
});

$("#receiptdonatortype02").on("click",function(){

  //reset person name
  $("#receiptprefixid01").prop("checked",false);
  $("#receiptprefixid02").prop("checked",false);
  $("#receiptprefixid03").prop("checked",false);
  $("#receiptfname").val("");
  $("#receiptlname").val("");

  //disable person name input
  $("#receiptprefixid01").attr("disabled",true);
  $("#receiptprefixid02").attr("disabled",true);
  $("#receiptprefixid03").attr("disabled",true);
  $("#receiptfname").attr("disabled",true);
  $("#receiptlname").attr("disabled",true);

  // enable orgname input
  $("#receiptorgname").attr("disabled",false);
});


$(document).ready(function() {
  // get province and add to select form
  getProvince();
  $("#receiptinfo").hide();
  $("#receiptprefixid01").attr("disabled",true);
  $("#receiptprefixid02").attr("disabled",true);
  $("#receiptfname").attr("disabled",true);
  $("#receiptlname").attr("disabled",true);
  $("#receiptorgname").attr("disabled",true);
});
