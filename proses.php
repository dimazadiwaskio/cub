      <?php
      include "koneksi.php";
      if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pesan=$_POST['pesan'];
        $to="dimazkimaznal@gmail.com,hello@cubdigital.com,ramaariestawardhana@gmail.com,wibawabratakusuma@gmail.com";
        $subject="From $name";
        $message="$pesan";
        mail($to, $subject, $message);
        $query=mysql_query("insert into contact values ('$id','$name','$email','$pesan')");
      if ($query) {
        ?>
      <script type="text/javascript">
      alert("Data Berhasil Masuk");
       window.location.href="http://cubdigital.com";
      </script>
      <?php
      }else{
      echo mysql_error();
      }
      }
    ?>  
