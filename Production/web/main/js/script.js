


// Validate data
function testvalidateData(){

}

function validateData(){
  // get values
  var prefixname = "";
  if($("#prefixid01").prop("checked")){
    prefixname = "นาย";
  }
  else if ($("#prefixid02").prop("checked")) {
    prefixname = "นาง";
  }
  else if ($("#prefixid03").prop("checked")) {
    prefixname = "นางสาว";
  }
  else if ($("#prefixid99").prop("checked")) {
    prefixname = $("#prefixname").val().trim();
  }
  var fname = $("#fname").val().trim();
  var lname = $("#lname").val().trim();
  var idcard = $("#idcard").val().trim();
  var email = $("#email").val().trim();
  var phone = $("#phone").val().trim();
  var mobile = $("#mobile").val().trim();
  var address = $("#address").val().trim();
  var subdistrict = $("#subdistrict").val().trim();
  var district = $("#district").val().trim();
  var province = $("#province").val();
  var txtprovince= $("#province :selected").text();
  var postalcode = $("#postalcode").val().trim();
  var amount = $("#amount").val();
  var evidence = $("#evidence").val();

  if ($("#receiptaddresstype02").prop("checked")) {
    if ($("#receiptnametype01").prop("checked")) {
      var receiptprefixname = "";
      if($("#receiptprefixid01").prop("checked")){
        receiptprefixname = "นาย";
      }
      else if ($("#receiptprefixid02").prop("checked")) {
        receiptprefixname = "นาง";
      }
      else if ($("#receiptprefixid03").prop("checked")) {
        receiptprefixname = "นางสาว";
      }
      else if ($("#receiptprefixid99").prop("checked")) {
        receiptprefixname = $("#receiptprefixname").val().trim();
      }
      var receiptfname = $("#receiptfname").val().trim();
      var receiptlname = $("#receiptlname").val().trim();
    }
    else if ($("#receiptnametype02").prop("checked")) {
      var receiptorgname = $("#receiptorgname").val().trim();
    }

    var receiptemail = $("#receiptemail").val().trim();
    var receiptphone = $("#receiptphone").val().trim();
    var receiptmobile = $("#receiptmobile").val().trim();
    var receiptaddress = $("#receiptaddress").val().trim();
    var receiptsubdistrict = $("#receiptsubdistrict").val().trim();
    var receiptdistrict = $("#receiptdistrict").val().trim();
    var receiptprovince = $("#receiptprovince").val();
    var receipttxtprovince= $("#receiptprovince :selected").text();
    var receiptpostalcode = $("#receiptpostalcode").val().trim();
  }

  if( prefixname == ""){
    alert("โปรดระบุคำนำหน้าชื่อ");
    $("#prefixid01").focus();
  }
  else if (fname == "") {
    alert("โปรดระบุชื่อ");
    $("#fname").focus();
  }
  else if (lname == "") {
    alert("โปรดระบุนามสกุล");
    $("#lname").focus();
  }
  else if (email == ""){
    alert("โปรดระบุ Email Address");
    $("#email").focus();
  }
  else if (mobile == ""){
    alert("โปรดระบุโทรศัพท์ (มือถือ)");
    $("#mobile").focus();
  }
  else if (address == ""){
    alert("โปรดระบุที่อยู่");
    $("#address").focus();
  }
  else if (subdistrict == ""){
    alert("โปรดระบุแขวง/ตำบล");
    $("#subdistrict").focus();
  }
  else if (district == ""){
    alert("โปรดระบุเขต/อำเภอ");
    $("#district").focus();
  }
  else if (province == ""){
    alert("โปรดระบุจังหวัด");
    $("#province").focus();
  }
  else if (postalcode == ""){
    alert("โปรดระบุรหัสไปรษณีย์");
    $("#postalcode").focus();
  }
  else if (amount == ""){
    alert("โปรดระบุจำนวนเงินบริจาค");
    $("#amount").focus();
  }
  else if (evidence == ""){
    alert("โปรดแนบไฟล์หลักฐาน");
    $("#evidence").focus();
  }
  else if (!$("#receiptaddresstype01").prop("checked") && !$("#receiptaddresstype02").prop("checked")) {
    alert("โปรดระบุข้อมูลในการออกใบเสร็จรับเงิน");
    $("#receiptaddresstype01").focus();
  }
  else {
    if ($("#receiptaddresstype01").prop("checked")) {
      showModalConfirm();
    }

    else if ($("#receiptaddresstype02").prop("checked")) {
      if (!$("#receiptnametype01").prop("checked") && !$("#receiptnametype02").prop("checked")) {
        alert("โปรดระบุบุคคล/นิติบุคคลในการออกใบเสร็จรับเงิน");
        $("#receiptnametype01").focus();
      }
      else if ($("#receiptnametype01").prop("checked") && ( (receiptprefixname == "") || (receiptfname == "") || (receiptlname == "") ) ) {
        if (receiptprefixname == "") {
          alert("โปรดระบุคำนำหน้าชื่อในการออกใบเสร็จ");
          $("#receiptprefixid01").focus();
        }
        else if (receiptfname == "") {
          alert("โปรดระบุชื่อในการออกใบเสร็จ");
          $("#receiptfname").focus();
        }
        else if (receiptlname == "") {
          alert("โปรดระบุนามสกุลในการออกใบเสร็จ");
          $("#receiptlname").focus();
        }
      }
      else if ($("#receiptnametype02").prop("checked") && (receiptorgname == "") ) {
        alert("โปรดชื่อนิติบุคคลในการออกใบเสร็จ");
        $("#receiptorgname").focus();
      }
      else if (receiptaddress == "") {
        alert("โปรดระบุที่อยู่ในการออกใบเสร็จรับเงิน");
        $("#receiptaddress").focus();
      }
      else if (receiptsubdistrict == "") {
        alert("โปรดระบุแขวง/ตำบลในการออกใบเสร็จรับเงิน");
        $("#receiptsubdistrict").focus();
      }
      else if (receiptdistrict == "") {
        alert("โปรดระบุเขต/อำเภอในการออกใบเสร็จรับเงิน");
        $("#receiptdistrict").focus();
      }
      else if (receiptprovince == "") {
        alert("โปรดระบุจังหวัดในการออกใบเสร็จรับเงิน");
        $("#receiptprovince").focus();
      }
      else if (receiptpostalcode == "") {
        alert("โปรดระบุรหัสไปรษณียในการออกใบเสร็จรับเงิน์");
        $("#receiptpostalcode").focus();
      }
      else {
        showModalConfirm();
      }
    }
  }
}

function showModalConfirm(){

  var receiptdonatorfullname="";

  if ($("#receiptaddresstype01").prop("checked")) {
    if($("#prefixid01").prop("checked")){
      prefixname = "นาย";
    }
    else if ($("#prefixid02").prop("checked")) {
      prefixname = "นาง";
    }
    else if ($("#prefixid03").prop("checked")) {
      prefixname = "นางสาว";
    }
    else if ($("#prefixid99").prop("checked")) {
      prefixname = $("#prefixname").val().trim();
    }
    receiptdonatorfullname = prefixname + $("#fname").val().trim() + " " + $("#lname").val().trim();
    $("#valid_name").html(receiptdonatorfullname);
    $("#valid_address").html("ที่อยู่ : " + $("#address").val().trim());
    $("#valid_subdistrict").html("แขวง/ตำบล : " + $("#subdistrict").val().trim());
    $("#valid_district").html("เขต/อำเภอ : " + $("#district").val().trim());
    $("#valid_province").html("จังหวัด : " + $("#province :selected").text());
    $("#valid_postalcode").html("รหัสไปรษณีย์ : " + $("#postalcode").val().trim());
    //$("#valid_address2").html($("#district").val().trim() + " " + $("#province :selected").text() + " " + $("#postalcode").val().trim());
    $("#valid_email").html("Email : " + $("#email").val().trim());
    $("#valid_mobile").html("โทรศัพท์ (มือถือ) : " + $("#mobile").val().trim());
  }
  else if ($("#receiptaddresstype02").prop("checked")) {
    if ($("#receiptnametype01").prop("checked")) {
      receiptdonatorfullname = "คุณ"+ $("#receiptfname").val().trim() + " " + $("#receiptlname").val().trim();
    }
    else if ($("#receiptnametype02").prop("checked")) {
      receiptdonatorfullname = $("#receiptorgname").val().trim();
    }
    $("#valid_name").html(receiptdonatorfullname);
    $("#valid_address").html("ที่อยู่ : " + $("#receiptaddress").val().trim());
    $("#valid_subdistrict").html("แขวง/ตำบล : " + $("#receiptsubdistrict").val().trim());
    $("#valid_district").html("เขต/อำเภอ : " + $("#receiptdistrict").val().trim());
    $("#valid_province").html("จังหวัด : " + $("#receiptprovince :selected").text());
    $("#valid_postalcode").html("รหัสไปรษณีย์ : " + $("#receiptpostalcode").val().trim());
    //$("#valid_address2").html($("#receiptdistrict").val().trim() + " " + $("#receiptprovince :selected").text() + " " + $("#receiptpostalcode").val().trim());
    $("#valid_email").html("Email : " + $("#receiptemail").val().trim());
    $("#valid_mobile").html("โทรศัพท์ (มือถือ) : " + $("#receiptmobile").val().trim());
  }
  $('#valid_amount').html("จำนวนเงิน : " + $("#amount").val());
  $("#modalConfirm").modal("show");
}


function addRequest(){

      var form = ("#reqform");
      var formData = new FormData(document.getElementById("reqform"));

      //alert('hello');

      $.ajax({
          url: "ajax/addrequest.php",
          type: "POST",
          data: formData,
          success: function (data) {
              //alert(data);
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
  $("#subdistrict").val("");
  $("#district").val("");
  $("#province").val("10");
  $("#postalcode").val("");
  $("#amount").val("");
  $("#evidence").val("");

  $("#receiptaddresstype01").prop("checked",false);
  $("#receiptaddresstype02").prop("checked",false);
  $("#receiptnametype01").prop("checked",false);
  $("#receiptnametype02").prop("checked",false);
  $("#receiptprefixid01").prop("checked",false);
  $("#receiptprefixid02").prop("checked",false);
  $("#receiptprefixid03").prop("checked",false);
  $("#receiptfname").val("");
  $("#receiptlname").val("");
  $("#receiptorgname").val("");
  $("#receiptemail").val("");
  $("#receiptphone").val("");
  $("#receiptmobile").val("");
  $("#receiptaddress").val("");
  $("#receiptsubdistrict").val("");
  $("#receiptdistrict").val("");
  $("#receiptprovince").val("10");
  $("#receiptpostalcode").val("");

}

$("#btnConfirm").on("click", function () {
    //alert("success");
    //$("#receivename").html("เรียน คุณ" + receiptdonatorfullname);
    addRequest();
    //$("#modalConfirm").removeClass("fade").modal("hide");
    //$("#modalSuccess").addClass("fade").modal("show");
    resetInputData();
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


$("#receiptnametype01").on("click",function(){

  // reset orgname
  $("#receiptorgname").val("");

  // disable orgname input
  $("#receiptorgname").attr("disabled",true);

  // enable person name input
  $("#receiptprefixid01").attr("disabled",false);
  $("#receiptprefixid02").attr("disabled",false);
  $("#receiptprefixid03").attr("disabled",false);
  $("#receiptprefixid99").attr("disabled",false);
  //$("#receiptprefixname").attr("disabled",false);
  $("#receiptfname").attr("disabled",false);
  $("#receiptlname").attr("disabled",false);
});

$("#receiptnametype02").on("click",function(){

  //reset person name
  $("#receiptprefixid01").prop("checked",false);
  $("#receiptprefixid02").prop("checked",false);
  $("#receiptprefixid03").prop("checked",false);
  $("#receiptprefixid99").prop("checked",false);
  $("#receiptprefixname").val("");
  $("#receiptfname").val("");
  $("#receiptlname").val("");

  //disable person name input
  $("#receiptprefixid01").attr("disabled",true);
  $("#receiptprefixid02").attr("disabled",true);
  $("#receiptprefixid03").attr("disabled",true);
  $("#receiptprefixid99").attr("disabled",true);
  $("#receiptprefixname").attr("disabled",true);
  $("#receiptfname").attr("disabled",true);
  $("#receiptlname").attr("disabled",true);

  // enable orgname input
  $("#receiptorgname").attr("disabled",false);
});

$("#prefixid01").on("click",function(){
  $("#prefixname").val("");
  $("#prefixname").attr("disabled",true);
});

$("#prefixid02").on("click",function(){
  $("#prefixname").val("");
  $("#prefixname").attr("disabled",true);
});

$("#prefixid03").on("click",function(){
  $("#prefixname").val("");
  $("#prefixname").attr("disabled",true);
});

$("#prefixid99").on("click",function(){
  $("#prefixname").attr("disabled",false);
});

$("#receiptprefixid01").on("click",function(){
  $("#receiptprefixname").val("");
  $("#receiptprefixname").attr("disabled",true);
});

$("#receiptprefixid02").on("click",function(){
  $("#receiptprefixname").val("");
  $("#receiptprefixname").attr("disabled",true);
});

$("#receiptprefixid03").on("click",function(){
  $("#receiptprefixname").val("");
  $("#receiptprefixname").attr("disabled",true);
});

$("#receiptprefixid99").on("click",function(){
  $("#receiptprefixname").attr("disabled",false);
});

$(document).ready(function() {
  // get province and add to select form
  getProvince();
  $("#prefixname").attr("disabled",true);
  $("#receiptinfo").hide();
  $("#receiptprefixid01").attr("disabled",true);
  $("#receiptprefixid02").attr("disabled",true);
  $("#receiptprefixid03").attr("disabled",true);
  $("#receiptprefixid99").attr("disabled",true);
  $("#receiptprefixname").attr("disabled",true);
  $("#receiptfname").attr("disabled",true);
  $("#receiptlname").attr("disabled",true);
  $("#receiptorgname").attr("disabled",true);


});
