<div class="row">
    <div class="span12">
        <ul class="nav nav-pills">
            <li class=""><a href="employee.html?">View Data</a></li>
            <li class="active"><a href="employee.html?action=insert">inserting data</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="span12">
<?php
    
    $request = $_GET['action'];
    
    if($request == null){
        //get connected first
        connectToMysql();
        $result = mysql_query("SELECT * FROM employees ORDER BY emp_no ASC LIMIT 20");
        $iterate = 0;
        echo "<table class='table table-bordered'>";
        while($data = mysql_fetch_array($result)){
            $iterate+=1;
            echo "<tr>";
            echo "<td>".$data['emp_no'].'</td>';
            echo "<td>".$data['first_name']."</td>";
            echo "<td>".$data['last_name']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysql_close();
    } else if($request == 'insert'){
        ?>
        <form action="employee.html?action=doInsert" method="POST">
            <fieldset
            <legend>Inserting Data Employee</legend>
            <input class="" type="text" name="emp_no" placeholder="Emp No" />
            <input type="text" name="first_name" placeholder="first name" />
            <input type="text" name="last_name" placeholder="last name" />
            <input type="date" name="birth" placeholder="birth date" />
            <select name="gender">
                <option value="M">male</option>
                <option value="F">female</option>
            </select>
            <input type="date" name="hire" placeholder="hire date" />
            <input type="submit" class="btn" value="submit"/>
            </fieldset>
        </form>
        <?php
    } else if($request == 'doInsert'){
        $emp_no = $_POST['emp_no'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $birth = $_POST['birth'];
        $gender = $_POST['gender'];
        $hire = $_POST['hire'];
        
        connectToMysql();
        $query = "INSERT INTO employee('emp_no','birth_date','first_name',
                    'last_name','gender','hire_date') VALUES ('{$emp_no}',{$birth}
                    '{$first_name}','{$last_name}','{$gender}','{$hire}')";

        if($result === mysql_query($query)){
            echo "sukses memasukkan satu data dengan detail : "+$query;
            mysql_close();
        } else {
            mysql_close();
            ?>
            <script>
                //location.replace('employee.php?action=insert')
            </script>
            <?php
        }
        
        
    }
    
?>
    </div>
</div>