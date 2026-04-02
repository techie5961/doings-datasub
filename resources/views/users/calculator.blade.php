@extends('layout.users.app')
@section('title')
    Calculator
@endsection
@section('css')
 <style type="text/css" media="all">
	  /* Created by david james */


		.calculator {
			display: block;
			margin: 0 auto;
			max-width: 500px;
			width:90%;
			height: 100%;
			background-color: rgb(0, 0, 0);
			border-radius: 35px;
			padding: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0,0.2);
			color: #FFF;
			border: 3px solid gray;
}

		.calculator input {
			width: 95%;
			color: white;
			border-radius: 25px;
			font-size: 70px;
			font-weight: 100;
			text-align: right;
			bottom:0;
			padding: 10px;
			margin-bottom: 5px;
			height: 20%;
			border: none;
			background-color: rgba(0, 0, 0,0.527);
}

		#display {
			color: rgb(255, 255, 255); 
			font-weight: lighter; 
			text-align: right; 
			font-size: 70px; 
}

	 
		.calculator .row {
			display: block;
			display: flex;
			margin-bottom: 10px;
			height: 15%;
			gap:10px;
			
}

		.calculator .row .button {
			flex: 1;
			margin: 0 5px;
			font-size: 40px;
			font-weight:100;
			background-color: #A0A0A0;
			border-radius: 300px;
			padding: 10px;
			text-align: center;
			cursor: pointer;
			color:rgb(0, 0, 0);
			aspect-ratio:1;
			display: flex;
			align-items:center;
			justify-content: center;

			
}
		
	
		.calculator .row .button1 {
			flex: 1;
			margin: 0 5px;
			font-size: 40px;
			font-weight:100;
			background-color: #f69906;
			border-radius: 300px;
			padding: 10px;
			text-align: center;
			cursor: pointer;
			aspect-ratio:1;
			display: flex;
			align-items:center;
			justify-content: center;
}
		
		.calculator .row .button2 {
		
			flex: 1;
			margin: 0 5px;
			font-size: 40px;
			font-weight:100;
			background-color: #313131;
			border-radius: 50px;
			padding: 10px;
			text-align: center;
			cursor: pointer;
			aspect-ratio:1;
			display: flex;
			align-items:center;
			justify-content: center;
}
.calculator .row .button2.equal-to{
	aspect-ratio:0;
}
	
		p {
			display: block;
			margin: 0 auto;;
			Color:rgb(48, 47, 47);
			text-align: center;
			bottom:0;
			font-size: 8px;
			
}
		
		.line {
			width: 35%;
			height: 3px;
			background-color: #A0A0A0;
			margin: 0 auto; /* Add this line */
			border-radius: 2px;
}

		.information {
			display: flex;
			justify-content: space-between;
			align-items: center;
			color: #fff;
			font-size: 9px;
			padding: 4px;
}

		.connection {
			flex:2;
			display: flex;
			justify-content: flex-start;
			padding-left: 10px;
}



		.battery {
			flex:2;
			display: flex;
			max-width: 0px;
			max-height: 8px ;
			justify-content: flex-end;
			background-color: #4AD962;
			border-radius: 3px;
			padding-right: 20px;
			border: 1px solid #A0A0A0;
}

		p1 {
			font-size: 4px;
			font-weight: bolder;
}
		p3 { 
			color: black;
				
}
		
		
	</style>
@endsection
@section('main')
    <section class="w-full column g-10">
      <div class="calculator"> 
		
<div class="top_screen">
			  <div class="information">
				<span class="connection">
				   📶5G LTE
				</span>
				
				</span>
				<span class="battery">
				  90%<p3>_</p3>
				  <i class="battery-full"></i>
				</span><p1>]</p1>
			  </div>
			  
			</div>

		<br/><br/></br></br><br>
		<input type="text" id="display" readonly value="0">

		<div class="row">
			<div class="button" onclick="MyFunc.clearDisplay()">c</div>
			<div class="button" onclick="MyFunc.appendOperator('.')">.</div> 
			<div class="button" onclick="MyFunc.appendNumber(0)">0</div> 
			<div class="button1" onclick="MyFunc.appendOperator('/')">÷</div>
		</div>
		<div class="row">
			<div class="button2" onclick="MyFunc.appendNumber(7)">7</div>
			<div class="button2" onclick="MyFunc.appendNumber(8)">8</div>
			<div class="button2" onclick="MyFunc.appendNumber(9)">9</div>
			<div class="button1" onclick="MyFunc.appendOperator('*')">x</div>
		</div>
		<div class="row">
			<div class="button2" onclick="MyFunc.appendNumber(4)">4</div>
			<div class="button2" onclick="MyFunc.appendNumber(5)">5</div>
			<div class="button2" onclick="MyFunc.appendNumber(6)">6</div>
			<div class="button1" onclick="MyFunc.appendOperator('-')">-</div>
		</div>
		<div class="row"> 
		<div class="button2" onclick="MyFunc.appendNumber(1)">1</div>
		<div class="button2" onclick="MyFunc.appendNumber(2)">2</div>
		<div class="button2" onclick="MyFunc.appendNumber(3)">3</div>
		<div class="button1" onclick="MyFunc.appendOperator('+')">+</div>
		</div> <br/>
		<div class="row"> 
		
		<div class="button2 equal-to" onclick="MyFunc.calculate()">=</div> <br>
		</div><br>
		<div class="line"></div>
	
	</div>
	   
    </section>
@endsection
@section('js')
	<script class="js">
		
window.MyFunc= {
	appendNumber : function(number) {
			const display = document.getElementById('display');
			display.value += number;
		},
	appendOperator : function(operator) {
			const display = document.getElementById('display');
			display.value += operator;
		},
	calculate : function() {
			const display = document.getElementById('display');
			try {
				const result = eval(display.value);
				display.value = result;
			} catch (error) {
				display.value = 'Error';
			}
		},
	clearDisplay : function() {
			const display = document.getElementById('display');
			display.value = '';
		}
}


		

		

		

	</script>
@endsection