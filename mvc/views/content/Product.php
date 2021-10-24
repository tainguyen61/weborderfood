<div class="container-fluid">
    <?php
        $data = json_decode($data["data"],true);
        // if($data["key"]==1){
        //     echo "hello Nguyen";
        // }else{
        //     echo "hello letinal";
        // }
        foreach($data as $values){
            ?>
                <h1><?php echo $values['tenmon']?></h1> <br/>

            <?php
        }
    ?>
</div>