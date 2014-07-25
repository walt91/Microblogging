<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $(".panel").fadeIn('slow');
        });
        $(document).ready(function() {
                $(".comment").fadeIn('slow');
        });
    </script>

<style type="text/css">

        div.panel,p.flip {
          text-align: center;
          padding: 5px;
          background-color: rgba(7, 3, 3, 0.27);
          border: solid 1px #fff;
          width:97%;
           height: auto;
          display: none;
          position: absolute;
          top: 50%; 
          left: 50%; 
          margin-top: -140px; 
          margin-left: -626px;
          color: white;
      }
      
      h1 {font-family: "Rockwell", serif;font-weight: bold;font-size: 50pt;}

    </style>
    <br>
    <br>
    <br>
    <form>
            <label style=" margin-left: 335px; color:white" > Make a hum, and share with your friends <span class="glyphicon glyphicon-pencil"></span> </label>
            <div class="controls">
              <textarea id="message" class="textarea" name="message" placeholder="Write your hum" style="width:550px;  margin-left: 345px;"></textarea>
              </div>
              <div class="controls">
              <button id="contact-submit" type="submit" class="btn btn-primary input-medium" style="margin-left: 735px; width:150px;">Hum</button>
              </div>

    </form>
    

  <div class="panel">
    

    <div class="container">
    <div class="page-header">
        <h1 id="timeline">HUMS</h1>
    </div>
    <ul class="timeline">

        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-paperclip"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
                <img class="circular" src="http://g.cdn.mersap.com/temas-legales/files/2012/08/persona-juridica.jpg" alt="" />
                <br>
            <h4 class="timeline-title">@Choco</h4>
            </div>
            <div class="timeline-body">
              <p>Hola pepito los palotes</p>
            </div>
            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 22/07/14</small></p>
            <hr>
            <div class="action">
              <button type="button" class="btn btn-warning btn-xs" title="unfollow">
              <span class="glyphicon glyphicon-remove-circle"></span>
              </button>
              <button type="button" class="btn btn-danger btn-xs" title="blockade">
              <span class="glyphicon glyphicon-ban-circle"></span>
              </button>
             </div>
          </div>

        </li>
         <li class="timeline-inverted">
          <div class="timeline-badge "><i class="glyphicon glyphicon-paperclip"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="circular" src="http://g.cdn.mersap.com/temas-legales/files/2012/08/persona-juridica.jpg" alt="" />
                <br>
            <h4 class="timeline-title">@Choco</h4>
            </div>
            <div class="timeline-body">
              <p>Hola pepito los palotes</p>
            </div>
            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 22/07/14</small></p>
            <hr>
            <div class="action">
              <button type="button" class="btn btn-warning btn-xs" title="unfollow">
              <span class="glyphicon glyphicon-remove-circle"></span>
              </button>
              <button type="button" class="btn btn-danger btn-xs" title="blockade">
              <span class="glyphicon glyphicon-ban-circle"></span>
              </button>
             </div>
          </div>
</div>
</div>