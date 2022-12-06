<?php 
	trait ProductsModel{
		public function modelRead($recordPerPage){
			$page = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"] - 1 : 0;
			$from = $page * $recordPerPage;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit $from, $recordPerPage");
			//lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			//tra ve ket qua
			return $result;
		}
		//lay tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("delete from products where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
		//lấy một bản ghi tương ứng với id truyền vào
		public function modelGetRecord($id){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//thực hiện truy vấn -> vì có biến truyền từ url vào nên thực hiện prepare để truyền tham số
			$query = $conn->prepare("select * from products where id=:var_id");
			//thực hiện truy vấn, có truyền tham số vào câu lệnh sql
			$query->execute(["var_id"=>$id]);
			//trả về một bản ghi
			return $query->fetch(PDO::FETCH_OBJ);
		}
		public function modelUpdate($id){
			$name = $_POST['name'];
			$description = $_POST['description'];
			$content = $_POST['content'];
			$hot = isset($_POST['hot']) ? 1 : 0;
			$category_id = $_POST['category_id'];
			$discount = $_POST['discount'];
			//update name
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update products set name=:var_name,description=:var_description,content=:var_content,hot=:var_hot,category_id=:var_category_id, discount=:var_discount where id=:var_id");
			//thuc thi truy van, truyen tham so
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_category_id"=>$category_id,"var_discount"=>$discount]);
			//nếu user chọn ảnh để upload thì tiến hành upload ảnh
			if($_FILES['photo']['name'] != ""){
				//lấy tên ảnh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload ảnh
				move_uploaded_file($_FILES['photo']['tmp_name'],"../asset/img/$photo");
				//update cột photo trong table users
				$query = $conn->prepare("update products set photo=:var_photo where id=:var_id");
				//thuc thi truy van, truyen tham so
				$query->execute(["var_id"=>$id,"var_photo"=>$photo]);
			}
		}
		public function modelCreate(){
			$name = $_POST['name'];
			$description = $_POST['description'];
			$content = $_POST['content'];
			$hot = isset($_POST['hot']) ? 1 : 0;
			$category_id = $_POST['category_id'];
			$discount = $_POST['discount'];
			$photo = "";
			//neu user chon anh de upload thi tien hanh upload anh
			if($_FILES['photo']['name'] != ""){
				//lay ten anh
				$photo = time()."_".$_FILES['photo']['name'];
				//upload anh
				move_uploaded_file($_FILES['photo']['tmp_name'], "../assets/upload/products/$photo");
			}
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into products set photo=:var_photo,name=:var_name,description=:var_description,content=:var_content,hot=:var_hot,category_id=:var_category_id,discount=:var_discount");
			//thuc thi truy van, truyen tham so
			$query->execute(["var_photo"=>$photo,"var_name"=>$name,"var_description"=>$description,"var_content"=>$content,"var_hot"=>$hot,"var_category_id"=>$category_id,"var_discount"=>$discount]);			
		}
	}
 ?>