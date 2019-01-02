function getPersonDetail(id) {
  $.post("ajax/getdetail.php", {
          id: id
      },
      function (data, status) {
          //alert(data);
          // PARSE json data
          var result = JSON.parse(data);
          // Assing existing values to the modal popup fields
          //alert(result.recieptaddresstype);
            $('#modalDetailTitle').html('รายละเอียดข้อมูลส่วนตัว');
            if( result.prefixid == '99') {
              var prefixname = result.prefixname;
            }
            else {
              var prefixname = result.masterprefixname;
            }
            receiptname = prefixname + result.fname + ' ' + result.lname;
            $('#detail_name').html('ชื่อ - นามสกุล : ' + receiptname);
            $('#detail_address').html('ที่อยู่ : ' + result.address);
            $('#detail_subdistrict').html('แขวง/ตำบล : ' + result.subdistrict);
            $('#detail_district').html('เขต/อำเภอ : ' + result.district);
            $('#detail_province').html('จังหวัด : ' + result.provincename);
            $('#detail_postalcode').html('รหัสไปรษณีย์ : ' + result.postalcode);
            $('#detail_phone').html('โทรศัพท์ (บ้าน) : ' + result.phonehome);
            $('#detail_mobile').html('โทรศัพท์ (มือถือ) : ' + result.phonemobile);
            $('#detail_email').html('Email : ' + result.email);
      }
  );
  // Open modal popup
  $("#modalDetail").modal("show");
}

function getReceiptDetail(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);

    $.post("ajax/getdetail.php", {
            id: id
        },
        function (data, status) {
            //alert(data);
            // PARSE json data
            var result = JSON.parse(data);
            // Assing existing values to the modal popup fields
            //alert(result.recieptaddresstype);
            $('#modalDetailTitle').html('รายละเอียดข้อมูลในการออกใบเสร็จ');
            if (result.receiptaddresstype == '02') {
              if (result.receiptnametype == '01') {
                if( result.receiptprefixid == '99') {
                  var prefixname = result.receiptprefixname;
                }
                else {
                  var prefixname = result.receiptmasterprefixname;
                }
                receiptname = result.receiptprefixname + result.receiptfname + ' ' + result.receiptlname;
                $('#detail_name').html('ชื่อ - นามสกุล : ' + receiptname);
              }
              else {
                $('#detail_name').html('ชื่อนิติบุคคล : ' + result.receiptorgname);
              }
              $('#detail_address').html('ที่อยู่ : ' + result.receiptaddress);
              $('#detail_subdistrict').html('แขวง/ตำบล : ' + result.receiptsubdistrict);
              $('#detail_district').html('เขต/อำเภอ : ' + result.receiptdistrict);
              $('#detail_province').html('จังหวัด : ' + result.receiptprovincename);
              $('#detail_postalcode').html('รหัสไปรษณีย์ : ' + result.receiptpostalcode);
              $('#detail_phone').html('โทรศัพท์ (บ้าน) : ' + result.receiptphonehome);
              $('#detail_mobile').html('โทรศัพท์ (มือถือ) : ' + result.receiptphonemobile);
              $('#detail_email').html('Email : ' + result.receiptemail);
            }
            else {
              if( result.prefixid == '99') {
                var prefixname = result.prefixname;
              }
              else {
                var prefixname = result.masterprefixname;
              }
              receiptname = prefixname + result.fname + ' ' + result.lname;
              $('#detail_name').html('ชื่อ - นามสกุล : ' + receiptname);
              $('#detail_address').html('ที่อยู่ : ' + result.address);
              $('#detail_subdistrict').html('แขวง/ตำบล : ' + result.subdistrict);
              $('#detail_district').html('เขต/อำเภอ : ' + result.district);
              $('#detail_province').html('จังหวัด : ' + result.provincename);
              $('#detail_postalcode').html('รหัสไปรษณีย์ : ' + result.postalcode);
              $('#detail_phone').html('โทรศัพท์ (บ้าน) : ' + result.phonehome);
              $('#detail_mobile').html('โทรศัพท์ (มือถือ) : ' + result.phonemobile);
              $('#detail_email').html('Email : ' + result.email);
            }
        }
    );
    // Open modal popup
    $("#modalDetail").modal("show");
}


$(document).ready(function() {
    $('#dataTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} )
