<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("header.php")
    ?>
    <main>
    <div class="container-fluid">
    <div class="card">
  <div class="card-header">
    ฟอร์มสมัครสมาชิก
  </div>
  <div class="card-body">
<form name="form1" action="#" method="post">
    <div class="row"><!-- row1 -->
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
    <select name="firstname" id="firstname" class="form-control">
        <option value="">คำนำหน้าชื่อ</option>
        <option value="นาย">นาย</option>
        <option value="นาย">นาง</option>
        <option value="นาย">นางสาว</option>
    </select>
    </div>
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="กรุณาใส่ชื่อ">
    </div>
    <div class="col-md-4">
    <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="กรุณาใส่นามสกุล">
    </div>
    </div><!-- row1 -->

    <div class="row"><!-- row2 -->
    <div class="col-md-2">
        <label for="exampleFormControlInput1" class="form-label">เพศ</label>
        <input type="radio" class="form-check-input" name="sex" id="sex"> ชาย
        <input type="radio" class="form-check-input" name="sex" id="sex"> หญิง
    </div>

    <div class="col-md-2">
    <label for="exampleFormControlInput1" class="form-label">วันเกิด</label>
   <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate" placeholder="00/00/0000" date-provid="datepicker" data-date-language="th-th">
   </div>

    <div class="col-md-8">
    <label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
    <textarea class="form-control" name="text_address" id="text_address" placeholder="กรุณาใส่ที่อยู่"></textarea>
    </div>
    </div><!-- row2 -->

    <div class="row"><!-- row3 -->
    <div class="col-md-5">
    <label for="exampleFormControlInput1" class="form-label">เบอร์โทร</label>
    <input type="$_POST" class="form-control" id="exampleFormControlInput1" placeholder="กรุณาใส่เบอร์โทร">
    <label for="exampleFormControlInput1" class="form-label">ที่อยู่อีเมลล์</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
    </div><!-- row3 -->
</form>
   
  </div>
</div>
    </div>
</main>

  <?php
  include("footer.php")
  ?>
</div>
</body>
</html>