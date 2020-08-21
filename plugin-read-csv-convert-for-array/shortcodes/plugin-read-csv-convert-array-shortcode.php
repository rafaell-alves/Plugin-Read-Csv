<?php
function csv_read_function_code(){
    ?>
    <form enctype="multipart/form-data" action="" method="post">
        <label for="">Importar CSV</label><br>
        <input type="file" name="csvfile" id="csvfile"><br>
        <button type="submit" name='submit'>Enviar</button><br>
    </form>
    <?php
      
      if( isset($_POST['submit']))
      {
        $csv = array();
        $file= $_FILES['csvfile']['tmp_name'];
        $row = file($file,FILE_IGNORE_NEW_LINES);
        
        foreach($row as $key => $value){
            str_getcsv($value);
            $csv[$key] = explode(';',$value);
        }
            echo '<pre>';
            print_r($csv);
            echo '</pre>';
            return $csv;
            
      }else{
          echo "SEM SUBMIT AINDA";
      }
}