<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $(".panel").fadeIn('slow');
        });
    </script>

<style type="text/css">

        div.panel,p.flip {
          text-align: center;
          padding: 5px;
          background-color: rgba(7, 3, 3, 0.27);
          border: solid 1px #fff;
          width:60%;
          height: 65%;
          display: none;
          position: absolute;
          top: 50%; 
          left: 50%; 
          margin-top: -180px; 
          margin-left: -400px; 
          color: white;
      }

      .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
      }
      .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
      }
      h1 {font-family: "Rockwell", serif;font-weight: bold;font-size: 50pt;}

    </style>
     
  <div class="panel">
    
</div>