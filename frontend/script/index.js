function delete_confirm(){
  Swal.fire({
    title: "แจ้งเตือน",
    text: "คุณต้องการลบข้อมูลนี้หรือไม่",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "ใช่",
    cancelButtonText: "ไม่ใช่"
  }).then((result) => {
    if (result.isConfirmed) {

      let div = document.getElementById('check_del');
      let url = div.dataset.url;
      // window.location = url;

      $.ajax({
          type: "GET",
          url: url, 
          success: function(html){  
            $('#refresh_div').load(document.URL +  ' #refresh_div');        
          }
      });
    }
  });
}

function delete_confirm_video(){
  Swal.fire({
    title: "แจ้งเตือน",
    text: "คุณต้องการลบข้อมูลนี้หรือไม่",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "ใช่",
    cancelButtonText: "ไม่ใช่"
  }).then((result) => {
    if (result.isConfirmed) {

      let div = document.getElementById('check_del_video');
      let url = div.dataset.url;
      // window.location = url;

      $.ajax({
          type: "GET",
          url: url, 
          success: function(html){  
            $('#refresh_div_video').load(document.URL +  ' #refresh_div_video');        
          }
      });
    }
  });
}

function check_validattion() {

  /*===== check form validation =====*/
    var form = document.getElementById("form");
    form.className= "was-validated";

    if (form.checkValidity()) {
      console.log("Form is valid!");
        /*===== check double click =====*/
      document.getElementById("submit_form").addEventListener("click", function() {
        this.disabled = true;
      });
        
    } else {
        console.log("Please fill in all the required fields.");
    }
}

function check_validattion2() {

  /*===== check form validation =====*/
    var form = document.getElementById("form2");
    form.className= "was-validated";

    if (form.checkValidity()) {
      console.log("Form is valid!");
        /*===== check double click =====*/
      document.getElementById("submit_form2").addEventListener("click", function() {
        this.disabled = true;
      });
        
    } else {
        console.log("Please fill in all the required fields.");
    }
}

function alert_success(){
  // Swal.fire({
  //   title: "แจ้งเตือน",
  //   text: "ทำรายการเรียบร้อยแล้ว",
  //   icon: "success",
  //   showConfirmButton: false,
  //   timer: 1000,
  // });
    var div           = document.getElementById('form');
    var title         = div.dataset.delete_title;
    var text          = div.dataset.delete_text;
    var yes           = div.dataset.delete_yes;
    var cancel        = div.dataset.delete_cancel;

    Swal.fire({
      title: "แจ้งเตือน",
      text: "ทำรายการเรียบร้อยแล้ว",
      icon: "success",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#ccc",
      confirmButtonText: "ตกลง",
      cancelButtonText: "ยกเลิก",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        var div = document.getElementById('check_url');
        var url = div.dataset.url;
        window.location = url;
      }
    });
}

function alert_success2(){
  // Swal.fire({
  //   title: "แจ้งเตือน",
  //   text: "ทำรายการเรียบร้อยแล้ว",
  //   icon: "success",
  //   showConfirmButton: false,
  //   timer: 1000,
  // });
    var div           = document.getElementById('form2');
    var title         = div.dataset.delete_title;
    var text          = div.dataset.delete_text;
    var yes           = div.dataset.delete_yes;
    var cancel        = div.dataset.delete_cancel;

    Swal.fire({
      title: "แจ้งเตือน",
      text: "ทำรายการเรียบร้อยแล้ว",
      icon: "success",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#ccc",
      confirmButtonText: "ตกลง",
      cancelButtonText: "ยกเลิก",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        var div = document.getElementById('check_url2');
        var url = div.dataset.url;
        window.location = url;
      }
    });
}

function alert_error(){
  Swal.fire({
    title: "แจ้งเตือน",
    text: "ทำรายการไม่สำเร็จ",
    icon: "error",
    showConfirmButton: false,
    timer: 1000,
  });
}

function alert_success3(){
  Swal.fire({
      title: "แจ้งเตือน",
      text: "ทำรายการเรียบร้อยแล้ว",
      icon: "success",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#ccc",
      confirmButtonText: "ตกลง",
      cancelButtonText: "ยกเลิก",
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = 'index.php?page=member_course';
      }
    });
  
}

