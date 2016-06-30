<?php
class StatCalc {
	private $data;
	private $sorted;
	public function __construct ($d){
		 
		$this->data = $d;
		$this->sorted = $this->data;
		sort ($this->sorted);
	}
	public function findMin(){
		return $this->sorted[0];
	}
	public function findMax (){
		return $this->sorted[count($this->sorted)-1];
	}
	public function findMean (){
		$sum = array_sum($this->sorted);
		$mean = $sum / count ($this->sorted);
		return $mean;
	}
	public function findMedian (){
		//Determine if the length is odd or even.
		if ( (count($this->sorted) % 2) != 0 ){
			$index = count ($this->sorted) / 2;
			$median = $this->sorted [$index];
		}
		else{
			$indexHi = count ($this->sorted) / 2;
			$indexLo = $indexHi - 1;
			$median = ($this->sorted[$indexLo] +
					$this->sorted [$indexHi]) / 2;
		}
		return $median;
	}
}
$filename = $_POST['data'];
$ops = $_POST['ops'];
$data = file_get_contents($filename);
$ar = explode(',', $data);
$statCalc = new StatCalc ($ar);

foreach ($ops as $value) {
	if ($value=='min') {
		$min=$statCalc->findMin();
		print "Min: " . $min . "<br>";
	}
	else if ($value=='max') {
		$max=$statCalc->findMax();
		print "Max: " . $max . "<br>";
	}
	else if ($value=='mean') {
		$mean=$statCalc->findMean();
		print "Mean: " . $mean . "<br>";
	}
	else if ($value=='median') {
		$median=$statCalc->findMedian();
		print "Median: " . $median . "<br>";
	}
}	
?>
