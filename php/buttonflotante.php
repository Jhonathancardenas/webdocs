<style>


#float{
	position:fixed;
	width:230px;
	height:225px;
	bottom:40px;
	right:-1px;
    color:#FFF;
	background-color: rgb(28,98,150);
	border-radius:30px;
	padding-bottom:10;
    top:50%;
	text-align:center;
    z-index:9001;   
}
#float2{
	position:fixed;
	width:115px;
	height:120px;
	bottom:40px;
	right:-35px;
    color:#FFF;
	border-radius:30px;
	padding-bottom:10;
    top:50%;
	text-align:center;
    z-index:9001;   
}
.my-float{
	margin-top:22px;
}
.white{
	color: #fff;
}
@media only screen and (max-width: 650px){
    #float2,#float 
	{
		max-width: 45%;
  }
}
</style>    

<div id="float"  class="hidden">	
	<div class="col-md-24" style="margin-top: 20px; min-width='35%'">
		<span  style="margin-top: 25px;">	
			<a  target="_blank" href="https://api.whatsapp.com/send?phone=573138311365&text=Hola! quisiera hacer una cotización">
				<img src="./images/phone.png" width="20%"/>
				<br>
				
				<i class="white bold">313 831 1365</i><br>
				<i class="white bold">(1)703 62 55</i>
	
			</a>
		</span>
	</div>
	<div class="col-md-12" style="margin-top: 20px; min-width='35%'">		
		<span>									
			<a  target="_blank" href="mailto:rafael.perez@ageso.com">
				<img src="./images/mail.png" width="20%" />
				<small class="white bold">rafael.perez@ageso.com.co</small>
			</a>
		</span>
	</div>
</div>
<div id="float2">
	<span>									
		<img src="./images/llamanos_closed.png" width="46.2%" max-width="40%"/>
	</span>
</div>

