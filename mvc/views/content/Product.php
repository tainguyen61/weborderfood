<div class="container-fluid">
    <div class="cards">
    <?php
        $data = json_decode($data["data"],true);
        foreach($data as $values){
            ?>
        <div class="card">
            <img src="<?php echo $values['hinhanh']?>" alt="" class="card-img">
            <div class="card-content">
                <h3 class="card-name"><?php echo $values['tenmon']?></h3>
                <div class="card-body">
                    <div class="card-rating-fix">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqrRjq7r9vurxyYb8u-YNnsLFwkQHqJggGvQ_EHahIlkRsMYgiEcU5bFyApXN7v4Tt_rA&usqp=CAU" alt="" class="card-rating-img">
                        <div class="card-rating"><?php echo $values['danhgia']?></div>
                    </div>
                    <div class="card-price"><?php echo number_format($values['gia'])."đ";?></div>
                </div>
                <div class="card-bottom">
                    <div><button class="card-delete">delete</button></div>
                    <div><button class="card-update">update</button></div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
