
// READ records
function readRecords() {
    alert("hello");
    $.get("ajax/readrecords.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
    alert (status);
}


$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});
