<?php
require 'app/model/Document.php';
use App\Model\Document;

class DocumentController {
    private $document;
    function __construct(){
        if (!isset($_SESSION['id'])) return header('Location:?c=login');
        $this->document = new Document();
    }

    function index() {
        return require 'app/view/document/index.php';
    }

    function loadDataItems(){
        $listDataDocument = $this->document->getAllData();
        return require 'app/view/document/datatable.php';
    }

    function create(){
        return require 'app/view/document/dialogs/dialog-upload-document.php';
    }

    function uploadFile(){
        $save = $this->document->uploadFile($_POST);
        if ($save) return $this->response('Upload tài liệu thành công', 1);
        return $this->response('Upload tài liệu thất bại');
    }
}

$document = new DocumentController();
$method = $_GET['doc'] ?? 'index';
$document->$method();