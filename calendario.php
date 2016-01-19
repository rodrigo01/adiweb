<div class="fullcont">
	<div class="titlebox">
		<h1>CALENDARIO</h1>
	</div>
	<div class="redbarlol">

	</div>
</div>

<div class="fullcont">
	<div style="text-align:center; color:#7f8080;">
		<h1><b>2016</b></h1>
	</div>
</div>

<div class="fullcont">
	<div class="row">
		<div class="col-xs-2">
			<div class="redbox mestitle">
				ENERO
			</div>
		</div>
		<div class="col-xs-8">

		</div>
	</div>
</div>

<div class="fullcont">
	<div class="row">
            <?php 
            $b=1;
            for ($i=0;$i<4;$i++){
                    for($j=0;$j<4;$j++) {
                    $a[$i][$j]=$b++;
                    }
            }
            for ($i=0;$i<4;$i++){
                for($j=0;$j<4;$j++){
            ?>            
		<div class="col-xs-6 margtop">
	           <div class="row">
		      <div class="col-xs-6 brddate">
		      	<div class="bigdate">
		      		<?php echo $a[$i][$j] ?>
		      	</div>
		      </div>
		    </div>
		</div>
            <?php } } ?>
	</div>
</div>