<?php
  if(isset($_POST['comentar'])) {
    $query = pg_query($con,"INSERT INTO foro (pregunta,usuario) VALUES ('".$_POST['comentario']."','".$_SESSION['id']."');");
    if($query) { header("Location: Foro.php"); }
  }
?>
    <?php
    if(isset($_POST['reply'])) {
        $query = pg_query($con,"INSERT INTO foro (pregunta,reply,usuario) VALUES ('".$_POST['comentario']."','".$_SESSION['id']."',
            '".$_SESSION['id']."');");   
        if($query) { header("Location: Foro.php"); }
    }
?>
<br>
  <div id="container">
      <ul id="comments">    
        <?php
        $comentarios = pg_query($con,"SELECT * FROM foro WHERE reply = 0 ORDER BY id_foro DESC");
    while($row=pg_fetch_array($comentarios))
    {
      $usuario = pg_query($con,"SELECT * FROM usuario WHERE id_usuario = '".$row['usuario']."'");
      $user = pg_fetch_array($usuario);
    ?>
        <li class="cmmnt">
                <div class="cmmnt-content">
                    <header>
                    <a href="#" class="userlink"><?php echo $user['usuario'];?></a> 
                    </header>
                    <p>
                    <?php echo $row['pregunta']; ?>
                    </p>
                    <span>
                    <a href="Foro.php?user=<?php echo $user['usuario']; ?>&id=<?php echo $row['id_foro']; ?>">
                    Responder
                    </a>
                    </span>
                </div>
                <?php
                $contar = pg_num_rows(pg_query($con,"SELECT * FROM foro WHERE reply = '".$row['id_foro']."'"));
                if($contar != '0') {
                    $reply = pg_query($con,"SELECT * FROM foro WHERE reply = '".$row['id_foro']."' ORDER BY id_foro DESC");
                    while($rep=pg_fetch_array($reply)) {
                        
                    $usuario2 = pg_query($con,"SELECT * FROM usuario WHERE id_usuario = '".$rep['usuario']."'");
                    $user2 = pg_fetch_array($usuario2);
                ?>
                <ul class="replies">
                    <li class="cmmnt">
                    <div class="cmmnt-content">
                        <header>
                        <a href="#" class="userlink"><?php echo $user2['usuario']; ?></a>
                        </header>
                        <p>
                        <?php echo $rep['pregunta']; ?>
                        </p>
                    </div>
                    </li>
                </ul>
                <?php } } } ?>
            </li>        
        </ul>
    </div>

