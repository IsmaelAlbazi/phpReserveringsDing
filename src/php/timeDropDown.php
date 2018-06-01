<?php
function timeNow($increment){
	$aantalMinutenNu = date("i");
	$uren= date("H"); 
	$aantalMinutenAfgerond = ($increment * ceil($aantalMinutenNu / $increment));
	if($aantalMinutenAfgerond==60){
		if($uren==23){
			$uren = "00"; 
		}
		else{
			$uren++;
		}
		
		$aantalMinutenAfgerond="00"; 
	}
	?><option value= <?php echo "$uren:$aantalMinutenAfgerond" ?>> <?php echo "$uren:$minuten$nul" ?></option><?php
}
	function timeDropDown($nul, $minuten){
        $uren = 9; 

		for($i=0; $i<36; $i++){
			$minuten=$minuten+15; 
			if($minuten>59){
				$minuten = 0; 
				$uren++; 
			}
			if($minuten==0){
                ?>
				<option value= <?php echo "$uren:$minuten$nul" ?>> <?php echo "$uren:$minuten$nul" ?></option>
                <?php
			}
			else{
				?>
                <option value= <?php echo "$uren:$minuten" ?>> <?php echo "$uren:$minuten" ?></option>;
                <?php
			}
		}

	}
	
?>