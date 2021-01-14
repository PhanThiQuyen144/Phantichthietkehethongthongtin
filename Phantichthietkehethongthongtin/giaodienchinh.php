<!doctype html>
<html lang="en">
  <head>
    <title>Thư viện</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color:lightsteelblue">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <img src="../CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/banner.jpg" alt=""> -->
            </div>
          </div>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                         <a class="nav-link" href="giaodienchinh.php">Thông tin độc giả <span class="sr-only">(current)</span></a>
                        <!-- <div class="dropdown-menu" aria-labelledby="dropdownId"> -->
                            <!-- <a class="dropdown-item" href="#">Thông tin độc giả</a> -->
                            <!-- <a class="dropdown-item" href="#">Tìm kiếm độc giả</a> -->
                            <!-- <a class="dropdown-item" href="#">Cập nhật thông tin độc giả</a> -->
                            <!-- <a class="dropdown-item" href="#">Tra cứu sách</a> -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="quanlymuontra.php" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý mượn trả sách</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="quanlymuontra.php">Quản lý mượn trả sách</a>  
                            <a class="dropdown-item" href="muonsach.php">Mượn sách</a>
                            <a class="dropdown-item" href="trasach.php">Trả sách</a>
                            <a class="dropdown-item" href="giahan.php">Gia hạn</a>
                            <a class="dropdown-item" href="tracuusach.php">Tra cứu sách</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                   <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search"> -->
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Đăng xuất</button>
                </form>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã độc giả</th>
                            <th>Hình ảnh</th>
                            <th>Họ tên </th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Mã lớp</th>
                            <th>Tài khoản</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td><img src="../CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/CSE logo.jpg" alt=""></td>
                            <td>Nguyễn Văn A</td>
                            <td>12/12/2000</td>
                            <td>Nam</td>
                            <td>60HT</td>
                            <td>TK1</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>