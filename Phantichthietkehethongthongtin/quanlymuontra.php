<!doctype html>
<html lang="en">
  <head>
    <title>Quản lý mượn trả sách</title>
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
                    <li class="nav-item ">
                         <a class="nav-link" href="giaodienchinh.php">Thông tin độc giả <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item active">
                         <a class="nav-link" href="quanlymuontra.php">Quản lý mượn trả sách<span class="sr-only">(current)</span></a>
                    </li>
                   
                </ul>
                <form class="form-inline my-2 my-lg-0">
                   <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search"> -->
                    <a href="dangnhap.php"><button class="btn btn-success my-2 my-sm-0" type="button">Đăng xuất</button></a>
                </form>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-6">
                <p><b> Sách mượn </b></p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!-- <th>Mã độc giả</th> -->
                            <th>Mã đầu sách </th>
                            <th>Tên đầu sách</th>
                            <th>Chuyên ngành</th>
                            <th>Ngày mượn sách</th>
                            <!-- <th>Mã lớp</th> -->
                            <!-- <th>Tài khoản</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td scope="row">1</td> -->
                            <td>Toan1</td>
                            <td>Toán rời rạc </td>
                            <td>Toán học </td>
                            <td>20/2/2020</td>
                            <!-- <td>60HT</td> -->
                            <!-- <td>TK1</td> -->
                        </tr>
                        <tr>
                            <td>Tin1</td>
                            <td>Tin học đại cương</td>
                            <td>Tin học </td>
                            <td>20/2/2020</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <p><b>Sách trả </b></p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!-- <th>Mã độc giả</th> -->
                            <th>Mã đầu sách </th>
                            <th>Tên đầu sách</th>
                            <th>Chuyên ngành</th>
                            <th>Ngày trả sách</th>
                            <!-- <th>Mã lớp</th> -->
                            <!-- <th>Tài khoản</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td scope="row">1</td> -->
                            <td>Tin2</td>
                            <td>Ngôn ngữ lập trình </td>
                            <td>Tin học </td>
                            <td>10/10/2019</td>
                            <!-- <td>60HT</td> -->
                            <!-- <td>TK1</td> -->
                        </tr>
                        <tr>
                            <td>Triet1</td>
                            <td>Pháp luật đại cương</td>
                            <td>Lý luận chính trị</td>
                            <td>3/2/2019</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 ">
                <p><b>Số lượng</b></p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <!-- <th>Mã độc giả</th> -->
                            <th>Sách trả</th>
                            <th>Sách mượn </th>
                            <th>Số tiền nợ</th>
                            <!-- <th>Ngày trả sách</th> -->
                            <!-- <th>Mã lớp</th> -->
                            <!-- <th>Tài khoản</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td scope="row">1</td> -->
                            <td>2</td>
                            <td>2 </td>
                            <td>0 </td>
                            <!-- <td>10/10/2019</td> -->
                            <!-- <td>60HT</td> -->
                            <!-- <td>TK1</td> -->
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