<div class="row">
    <div class="span12">
        <table class="table table-bordered">

<?php
    //get connected first
    connectToMysql();
    
    $result = mysql_query("SELECT * FROM employees LIMIT 20");
    $iterate = 0;
    while($data = mysql_fetch_array($result)){
        $iterate+=1;
        echo "<tr>";
        echo "<td>".$iterate.'</td>';
        echo "<td>".$data['first_name']."</td>";
        echo "<td>".$data['last_name']."</td>";
        echo "</tr>";
    }
    
    mysql_close();
?>
      
        </table>
    </div>
</div>