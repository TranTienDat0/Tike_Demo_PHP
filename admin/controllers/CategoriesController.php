<?php
    //load file model
    include "models/CategoriesModel.php";
    class CategoriesController extends Controller{
        //kế thừa class CategoriesModel
        use CategoriesModel;
        //hiển thị danh sách
        public function index(){
            //quy định số bản ghi trên 1 trang
            $recordPerPage =4;
            //lấy tổng số bản ghi
            $totalRecord = $this->modelTotalRecord();
            //tính số trang
            //ceil(so) sẽ lấy tràn. VD: ceil(3.6)=5
            $numPage = ceil($totalRecord/$recordPerPage);
            //lấy dữ liệu
            $data = $this->modelRead($recordPerPage);
            //gọi view, truyền dữ liệu ra view
            $this->loadView("CategoriesView.php", ["data"=>$data, "numPage"=>$numPage]);
        }
        //sửa bản ghi -GET
        //url: index.php?controller=categories&action=update&id=number;
        public function update(){
            //lấy id truyền từ url
            $id = isset($_GET["id"]) ? $_GET['id'] : 0;
            //tạo biến $action để gán vào thuộc tính action của thẻ form
            $action = "index.php?controller=categories&action=updatePost&id=$id";
            //lấy một bản ghi
            $record = $this->modelGetRecord($id);
            
            $this->loadView("CategoriesFormView.php", ["action"=>$action, "record"=>$record]);

        }

        //sửa bản ghi -POST -> khi ấn nút submit
        //url: index.php?controller=categories&action=update&id=number
        public function updatePost(){
            //lấy í truyền từ url
            $id = isset($_GET["id"]) ? $_GET['id'] :0;
            //gọi hàm modelUpdate để update bản ghi
            $this->modelUpdate($id);
            //quay trở lại trang categories
            header("location:index.php?controller=categories");
        }
        //thêm bản ghi -GET
         //url: index.php?controller=categories&action=update&id=create
        public function create(){
			//tao bien $action de gan vao thuoc tinh action cua the form
			$action = "index.php?controller=categories&action=createPost";
			//print_r($record);
			$this->loadView("CategoriesFormView.php",["action"=>$action]);
		}
        //thêm bản ghi -POST
         //url: index.php?controller=categories&action=update&d=createPost
        public function createPost(){
			//goi ham modelUpdate de update ban ghi
			$this->modelCreate();
			//quay tro lai trang categories
			header("location:index.php?controller=categories");
		}
        //xóa bản ghi -GET
        public function delete(){
            //gọi hàm modelDelete
            $this->modelDelete();
            header("location:index.php?controller=categories");
        }
        
    }
?>