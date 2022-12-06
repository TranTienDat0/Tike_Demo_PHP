<?php
	trait CategoriesModel{
		public function modelRead($recordPerPage){
			$page = isset($_GET["p"])&& $_GET["p"]>0 ? $_GET["p"] - 1 : 0;
			// lay tong so ban ghi
			$from = $page *$recordPerPage;
			// lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories order by id desc limit $from,$recordPerPage");
			// lay tat ca cac ban ghi
			$result = $query->fetchAll(PDO::FETCH_OBJ);
			// tra ve jet qua
			return $result;
		}
		// lay tong so ban ghi
		public function modelTotalRecord(){
			// lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories ");
			// tra ve so luong ban hhi
			return $query->rowCount();
		}
		// xoa ban ghi
		public function modelDelete(){
			$id = isset($_GET["id"])&& is_numeric($_GET["id"])? $_GET["id"]:0;
			// lay bien ket ni csdl
			$conn = Connection::getInstance();
			// xoa thi phai xoa ca cap cha va con

			$query = $conn->prepare("delete from Categories where id=:var_id or parent_id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
		// lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			// lay bien kn csdl
			$conn = Connection::getInstance();
			// thuc hien truy van -> vi co bien truyen tu url vao nen thuc hien prepare de truyen tham so
			$query = $conn->prepare("select * from Categories where id=:var_id");
			//thuc hien truy van , co truyen tham si vao cau lenh sql
			$query->execute(["var_id"=>$id]);
			// tra ve 1 ban ghi
			// phai tryen vao PDO: object moi hien thi thong tin ra duoc
			return $query->fetch(PDO::FETCH_OBJ);
		}
		// chinh sua
		public function modelUpdate($id){
			$name = $_POST['name'];
			//$parent_id = $_POST['parent_id'];
			//update name
			$conn = Connection::getInstance();
			$query = $conn->prepare("update categories set name=:var_name where id=:var_id");
			// thuc thi truy vanm truyen tham so
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_parent_id"=>$parent_id]);
		}

		public function modelCreate(){
			$name = $_POST['name'];
			
			//update name, email, password
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into categories set name=:var_name");
			//thuc thi truy van, truyen tham so
			$query->execute(["var_name"=>$name]);			
		}
	}
?>