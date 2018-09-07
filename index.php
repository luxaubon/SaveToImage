
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IMAGE</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <script src="dom-to-image.js"></script>
  </head>
  <body class="hold-transition skin-blue-light sidebar-mini">

      <div class="box" id="elementId">
        <
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
       <center><button class="btn btn-info btn-lg" onclick="save('1111')"><i class="fa fa-cloud-download" aria-hidden="true"></i> บันทึกรูปภาพ</button>
          </center>
 

    <script type="text/javascript">
    function save(name){
    domtoimage.toJpeg(document.getElementById('elementId'), { quality: 0.95 })
    .then(function (dataUrl) {
    var link = document.createElement('a');
    link.download = name+'.jpeg';
    link.href = dataUrl;
    link.click();
    });
    }
    </script>
  </body>
</html>